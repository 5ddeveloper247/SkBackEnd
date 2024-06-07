<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class WhatsAppHelper
{
    public static function sendMessages(array $phoneNumbers, string $message, int $referenceId)
    {
        foreach ($phoneNumbers as $phoneno) {
            try {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.ultramsg.com/instance87491/messages/chat",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "token=dd7ukuz6brmyq6by&to=$phoneno&body=$message&priority=1&referenceId=$referenceId",
                    CURLOPT_HTTPHEADER => array(
                        "content-type: application/x-www-form-urlencoded"
                    ),
                ));

                $response = curl_exec($curl);
                if ($err = curl_error($curl)) {
                    throw new \Exception($err);
                }
                curl_close($curl);
                $response = json_decode($response, true);

                if (isset($response['status']) && $response['status'] !== 'success') {
                    throw new \Exception('Failed to send WhatsApp message: ' . json_encode($response));
                }
            } catch (\Exception $e) {
                // Log the error if sending WhatsApp message fails
                Log::error('Error sending WhatsApp message to ' . $phoneno . ': ' . $e->getMessage());
            }
        }
    }
}
