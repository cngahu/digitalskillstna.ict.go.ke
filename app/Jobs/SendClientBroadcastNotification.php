<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendClientBroadcastNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $broadcast;
    protected $clientEmail;

    public function __construct($broadcast, $clientEmail)
    {
        $this->broadcast = $broadcast;
        $this->clientEmail = $clientEmail;
    }

    public function handle()
    {

        Mail::to($this->clientEmail)->send(new \App\Mail\ClientBroadcastNotification($this->broadcast));
    }

    /**
     * Execute the job.
     *
     * @return void
     */

}
