<?php


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Queue;
use App\Jobs\SendMailJob;
if (!function_exists('sendMail')) {
    function sendMail($send_to_name, $send_to_email, $email_from_name, $subject, $body)
    {
        try {
            $mail_val = [
                'send_to_name' => $send_to_name,
                'send_to' => $send_to_email,
                'email_from' => 'noreply@pancard.com',
                'email_from_name' => $email_from_name,
                'subject' => $subject,
            ];

            // Dispatch the job to send the email
            Queue::push(new SendMailJob($mail_val, $body));

            return true;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return $e->getMessage();
        }
    }



    function convertYouTubeUrlToEmbed($url)
    {
        // Parse the URL
        $parsedUrl = parse_url($url);
        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParams);
            if (isset($queryParams['v'])) {
                return 'https://www.youtube.com/embed/' . $queryParams['v'] . '?autoplay=1&mute=1';
            }
        }
        return $url;
    }
}
