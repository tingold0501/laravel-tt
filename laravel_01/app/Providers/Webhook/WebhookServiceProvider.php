<?php

namespace App\Providers\Webhook;

use Illuminate\Support\ServiceProvider;

class WebhookServiceProvider extends ServiceProvider
{
    public function processWebhook(array $data)
    {
        $this->processPayload($data);
        $event = $data['event'];

        return match($event) {
            'order.created' => $this->handleOrderCreated($data),
            'order.updated' => $this->handleOrderUpdated($data),
            'order.deleted' => $this->handleOrderDeleted($data),
        };
    }
    public function processPayload(array $data)
    {
        if(empty($data)) {
            throw new \Exception('Payload is empty');
        }
        $this->handleData($data);
    }
    public function handleData(array $data)
    {
        ProcessWebhook::dispatch($data);
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
