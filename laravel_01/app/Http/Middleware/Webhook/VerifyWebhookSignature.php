<?php

namespace App\Http\Middleware\Webhook;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\Webhook\WebhookServiceProvider;

class VerifyWebhookSignature
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $signature = $request->header('X-Webhook-Signature');
            if (!$signature) {
                return response()->json(['message' => 'Webhook signature is missing'], 400);
            }

            $webhookService = app(WebhookServiceProvider::class);
            $webhookService->verifySignature($signature);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Webhook signature is invalid'], 400);
        }
        return $next($request);
    }
}
