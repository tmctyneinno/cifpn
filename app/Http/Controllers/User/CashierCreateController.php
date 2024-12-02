<?php

namespace App\Http\Controllers\User;
use Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Services\OpayService;

class CashierCreateController extends Controller
{
    private $opayService;
    private $secretkey; 
    private $merchantId;
    private $url;

    public function __construct(OpayService $opayService)
    {
        $this->merchantId = config('opay.merchant_id');
        $this->secretkey = config('opay.private_key');
        $this->urlGet = config('opay.base_url').'/api/v1/international/cashier/status';
    }

    public function queryPaymentStatus()
    {
        $data = [
            'country' => 'NG',
            'reference' => 'APP-67470d0fb6922',
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
                ->post($this->urlGet, $data);

            return response()->json(json_decode($response->getBody(), true));
        } catch (RequestException $exception) {
            return response()->json([
                'message' => 'Error querying payment status: ' . $exception->getMessage(),
            ], 500);
        }
    }

}
