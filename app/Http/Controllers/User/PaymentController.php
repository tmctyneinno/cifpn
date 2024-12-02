<?php

namespace App\Http\Controllers\User;
use Log;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OpayService;
use App\Models\ApplicationForm;
use App\Models\Transaction;


class PaymentController extends Controller
{
    protected $opayService; 

    public function __construct(OpayService $opayService)
    {
        $this->opayService = $opayService;
    }
    
    public function handleCallback(Request $request)
    {
        try {
             
            $trxref = $request->query('trxref');  
            $reference = $request->query('reference');
           
            if (!$trxref || !$reference) {
                return redirect()->back()->with('error', 'Missing required parameters.');
            }

            $application = ApplicationForm::where('reference', $reference)->first();
            $transaction = Transaction::where('transaction_reference', $reference)->first();
            $paymentOption = $application->payment_option;
            if (!$application) {
                return redirect()->back()->with('error', 'Application not found.');
            }

            if ($paymentOption === 'paystack') {
                $this->handlePaystackCallback($application, $transaction);
            } elseif ($paymentOption === 'moniepoint') {
                $this->verifyMoniepointPayment($application, $transaction);
            } elseif ($paymentOption === 'opay') {
                $this->handleOpayPayment($application, $transaction);
            } else {
                return redirect()->back()->with('error', 'Invalid payment option.');
            }
            return redirect()->back()->with('success', 'Callback processed successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to process callback'.$e->getMessage());
        }
    }

   
    private function handlePaystackCallback($application, $transaction)
    {
        try {
            $paystack = new \Yabacon\Paystack(env('PAYSTACK_SECRET_KEY'));
            $response = $paystack->transaction->verify(['reference' => $application->reference]);
    
            if ($response->data->status === 'success') {
                $transaction->update([ 
                    'status' => $response->data->status,
                ]);
                $application->update([
                    'payment_status' => $response->data->status
                ]);
                return redirect()->route('user.dashboard')->with('success', 'Payment verified successfully.');
            }
            $transaction->update([ 
                'status' => $response->data->status,
            ]);
            $application->update([
                'payment_status' => $response->data->status
            ]);
            return redirect()->back()->with('error', 'Payment verification failed.');
        } catch (\Exception $e) {
            Log::error('Paystack verification error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Paystack verification failed'.$e->getMessage());
        }

    }


    public function handleOpayCallback(Request $request)
    {
        // dd($request);
        $user = Auth::user();

        $transaction = Transaction::where('user_id', $user->id)
                                    ->where('user_email',  $user->email)
                                    ->latest('created_at')  
                                    ->first();
        if ($transaction) {
            $paymentResponse = $this->opayService->queryPaymentStatus($transaction->transaction_reference);
            // dd($paymentResponse);  
            $responseData = $paymentResponse->getData(true);
            if (isset($responseData['code']) && $responseData['code'] === '00000' && isset($responseData['data'])) {
                // Now you can safely use $paymentResponse as an array.
                $data = $responseData['data'];
                $transactionReference = $data['reference'];
                $status = $data['status']; 
                $amount = $data['amount']['total']; 
                $currency = $data['amount']['currency']; 
                $orderNo = $data['orderNo']; 
                $paymentInstrument = $data['payInstrumentAccount']; 
                
                $transaction = Transaction::where('transaction_reference', $transactionReference)->first();
                $transaction->status = $status;
                $transaction->amount = $amount;
                $transaction->currency = $currency;
                $transaction->order_no = $orderNo;
                $transaction->payment_instrument = $paymentInstrument;
                $transaction->save();

                
                return redirect()->route('user.dashboard')->with('success', 'Payment verified successfully.');
            }else{
                $transaction->update([
                    'payment_status' => $paymentResponse['data']['status'],
                ]);
            }
        } else {
            return response()->json([
                'error' => 'No transaction found for user: ' . $user->id,
            ], 404);
        }
       
    }

    public function opayPaymentCancel(Request $request)
    {
        $transactionStatus = $request->input('status');  

        if ($transactionStatus == 'CANCELLED') {
            return redirect()->route('payment.failed');  
        } else {
            return redirect()->route('payment.failed'); 
        }
    }

    public function opayPaymentFailed(){

        return redirect()->route('user.dashboard')->with('error', 'Failed to process payment');

        // return view('portal.application.create');
    }
}
