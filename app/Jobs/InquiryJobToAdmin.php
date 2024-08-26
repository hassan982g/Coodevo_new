<?php

namespace App\Jobs;

use App\Mail\InquiryMailToAdmin;
use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class InquiryJobToAdmin implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $inquiry;
    /**
     * Create a new job instance.
     */
    public function __construct(Inquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('aism.shahzad20@gmail.com')   // admin email
        ->send(new InquiryMailToAdmin($this->inquiry));
    }
}
