<?php
// Example of SendMailJob class
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $mailData;
    protected $body;

    /**
     * Create a new job instance.
     *
     * @param array $mailData
     * @param string $body
     */
    public function __construct(array $mailData, string $body)
    {
        $this->mailData = $mailData;
        $this->body = $body;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailData = $this->mailData;
        $body = $this->body;

        Mail::send('mail.mail', ['body' => $body], function ($send) use ($mailData) {
            $send->from($mailData['email_from'], $mailData['email_from_name']);
            $send->replyTo($mailData['email_from'], $mailData['email_from_name']);
            $send->to($mailData['send_to'], $mailData['send_to_name'])->subject($mailData['subject']);
        });
    }
}
