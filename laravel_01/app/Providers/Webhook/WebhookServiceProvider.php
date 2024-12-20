<?php

namespace App\Providers\Webhook;

use Illuminate\Support\ServiceProvider;

class WebhookServiceProvider extends ServiceProvider
{
    public function verifySignature(string $payload, string $signature): void
    {
        $secret = config('services.webhook.secret');
        $computedSignature = hash_hmac('sha256', $payload, $secret);
        if ($signature !== $computedSignature) {
            throw new \Exception('Invalid signature');
        }
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
