<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpayService
{
 
    private $publicKey;
    private $secretkey;
    private $merchantId;
    private $url;
    private $getStatus;

    public function __construct()
    {
       
        $this->merchantId = config('opay.merchant_id');
        $this->publicKey = config('opay.public_key');
        $this->secretkey = config('opay.private_key');
        $this->url = config('opay.base_url').'/api/v1/international/cashier/create';
        $this->getStatus = config('opay.base_url').'/api/v1/international/cashier/status';
    }

   
    public function paymentData($application)
    {
        $amount = $application->amount;
        $userEmail = $application->user_email; 
        $reference = $application->reference; 
        $url = $this->url;

        $data = [
            'country' => 'NG',  
            'reference' => $reference, 
            'amount' => [
                "total" => $amount * 10,
                "currency" => 'NGN',
            ],
            'returnUrl' => route('payment.return'),  
            'callbackUrl' => route('payment.callback'),  
            'cancelUrl' => route('payment.cancel'), 
            'expireAt' => 30,  
            'sn' => 'PE462xxxxxxxx',  // This could be a unique serial number if required
            'userInfo' => [
                "userEmail" => $userEmail,
                "userId" => $application->user_id,  // Unique user ID
                "userMobile" => $application->phone_number, // Phone number of the user
                "userName" => $application->user_name,  // You can change this if needed
            ],
            'product' => [
                "name" => 'Membership Payment',  
                "description" => 'Payment for Membership Category: ' . $application->membership_category,  // Add more description if needed
            ],
            'payMethod' => 'BankCard',  
        ];

        $result = $this->createCashier($data);
        
        return response()->json($result);
    }

    public function createCashier(array $paymentData): array
    {
        try {
            $response = Http::withHeaders([ 
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->publicKey,
                'MerchantId' => $this->merchantId,
            ])->post($this->url, $paymentData);

            if ($response->successful()) {
                // dd($response->json());
                return [
                    'status' => 'success',
                    'data' => $response->json(),
                ];
            }

            return [
                'status' => 'error',
                'message' => $response->json('message') ?? 'An error occurred',
                'details' => $response->json(),
            ];
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'An exception occurred',
                'details' => $e->getMessage(),
            ];
        }
    }

    public function queryPaymentStatus($reference)
    {
        $data = [
            'country' => 'NG',
            'reference' => $reference,
        ];

        $dataJson = (string) json_encode($data, JSON_UNESCAPED_SLASHES);
        $auth = hash_hmac('sha512', $dataJson, $this->secretkey);
        $signature = hash_hmac('sha512', $dataJson, $this->secretkey);

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '. $auth, 
            'MerchantId' => $this->merchantId,
            'Signature' => $signature,
        ];

        try {
            $response = Http::withHeaders($headers)
                ->post($this->getStatus, $data);

            return response()->json(json_decode($response->getBody(), true));
        } catch (RequestException $exception) {
            return response()->json([
                'message' => 'Error querying payment status: ' . $exception->getMessage(),
            ], 500);
        }
    }
}
