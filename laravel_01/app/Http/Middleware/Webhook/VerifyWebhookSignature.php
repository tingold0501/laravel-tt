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
            $singature = $request->header('X-Webhook-Signature');
            if(!$singature) {
                return response()->json(['message' => 'Invalid signature'], 401);
            }
            $webhookServiceProvider = app(WebhookServiceProvider::class);
            $webhookServiceProvider->verifySignature($request->getContent(), $singature);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Invalid signature'], 401);
        }
        return $next($request);
    }
}
