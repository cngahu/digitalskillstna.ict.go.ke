<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendClientReviewNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $printAdvert;
    protected $clientEmail;

    public function __construct($printAdvert, $clientEmail)
    {
        $this->printAdvert = $printAdvert;
        $this->clientEmail = $clientEmail;
    }

    public function handle()
    {

        Mail::to($this->clientEmail)->send(new \App\Mail\ClientReviewNotification($this->printAdvert));
    }

    /**
     * Execute the job.
     *
     * @return void
     */

}
