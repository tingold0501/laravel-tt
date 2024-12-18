<?php

namespace App\Jobs\Webhook;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessWebhookJob implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $webhookServiceProvider = app(WebhookServiceProvider::class);
            $webhookServiceProvider->processWebhook($this->data);
        } catch (\Throwable $th) {
            Log::error('Error processing webhook: ' . $th->getMessage());
        }
    }
}

