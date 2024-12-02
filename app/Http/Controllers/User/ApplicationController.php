<?php

namespace App\Http\Controllers\User;
use Auth;
use Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Services\OpayService;
use App\Models\Transaction;
use App\Models\ApplicationForm;
use App\Mail\ApplicationStatusNotification;

class ApplicationController extends Controller
{
    protected $opayService; 

    public function __construct(OpayService $opayService)
    {
        $this->opayService = $opayService;
    }

    public function create()
    {
        $user = Auth::user();

        $data = ApplicationForm::where('user_id', $user->id)
                            ->where('user_email', $user->email)
                            ->first();

        // Pass the data to the view
        return view('portal.application.create', ['data' => $data]);
    }


    public function store(Request $request)
    {
        try{
           
            $validated = Validator::make($request->all(), [
                'phone_number' => 'required|string|max:18',
                'qualification' => 'required|string',
                'membership_category' => 'required|string',
                'certification' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'academic_qualifications' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'work_experience' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'professional_certifications' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'identification' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'payment_option' => 'required|string|in:paystack,moniepoint,opay',
                'fee_acknowledged' => 'accepted',
                'amount' => 'required|numeric',
            ]);
    
            if ($validated->fails()) {
                return response()->json([
                    'code' => 400, 
                    'error' => $validated->errors(), 
                ]);
            }
            // File uploads 
            $certificationPath = $this->handleFileUpload($request, 'certification', 'certifications');
            $academicQualificationsPath = $this->handleFileUpload($request, 'academic_qualifications', 'academic_qualifications');
            $workExperiencePath = $this->handleFileUpload($request, 'work_experience', 'work_experience');
            $professionalCertificationsPath = $this->handleFileUpload($request, 'professional_certifications', 'professional_certifications');
            $identificationPath = $this->handleFileUpload($request, 'identification', 'identification');

            $reference = uniqid('APP-');
           
            $application = ApplicationForm::create([
                'user_id' => Auth::id(),
                'user_email' => Auth::user()->email,
                'phone_number' => $request->phone_number,
                'qualification' => $request->qualification,
                'membership_category' => $request->membership_category,
                'certification_path' => 'assets/application/certifications/'.$certificationPath,
                'academic_qualifications_path' => 'assets/application/academic_qualifications/'.$academicQualificationsPath,
                'work_experience_path' => 'assets/application/work_experience/'.$workExperiencePath,
                'professional_certifications_path' => 'assets/application/professional_certifications/'.$professionalCertificationsPath,
                'identification_path' => $identificationPath,
                'applicant_status' => 'pending',
                'payment_option' => $request->payment_option,
                'fee_acknowledged' => $request->fee_acknowledged ? 1 : 0,
                'reference' => $reference,
                'amount' => $request->amount, 
                'payment_status' => 'pending',
            ]);
            //  Transaction record
            $transaction = Transaction::create([
                'application_id' => $application->id,
                'user_id' => Auth::id(),
                'user_email' => Auth::user()->email,
                'amount' => $request->amount,
                'payment_status' => 'pending',
                'transaction_type' => $request->payment_option,
                'transaction_reference' => $reference,
            ]);
            if ($application->applicant_status === 'pending') {
                $message = 'Your payment was successful. Your documents will be reviewed for verification.';
            }
            $this->sendMessage($application->user_email, $message);
    
            $paymentOption = $request->payment_option;

            if ($paymentOption === 'paystack') {
                return $this->processPaystackPayment($application, $transaction);
            } elseif ($paymentOption === 'moniepoint') {
                return $this->processMoniepointPayment($application, $transaction);
            } elseif ($paymentOption === 'opay') {
                return $this->processOpayPayment($application);
            }

            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred Application: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = Validator::make($request->all(), [
                'phone_number' => 'required|string|max:18',
                'qualification' => 'required|string',
                'membership_category' => 'required|string',
                'certification' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'academic_qualifications' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'work_experience' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'professional_certifications' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                'identification' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg|max:5048',
                // 'payment_option' => 'required|string|in:paystack,moniepoint,opay',
                // 'fee_acknowledged' => 'accepted',
                'amount' => 'required|numeric',
            ]);

            if ($validated->fails()) {
                return response()->json([
                    'code' => 400, 
                    'error' => $validated->errors(), 
                ]);
            }

            // Find the application to update
            $application = ApplicationForm::findOrFail($id);

            // Handle file uploads (only if the user uploads new files)
            $certificationPath = $this->handleFileUpload($request, 'certification', 'certifications');
            $academicQualificationsPath = $this->handleFileUpload($request, 'academic_qualifications', 'academic_qualifications');
            $workExperiencePath = $this->handleFileUpload($request, 'work_experience', 'work_experience');
            $professionalCertificationsPath = $this->handleFileUpload($request, 'professional_certifications', 'professional_certifications');
            $identificationPath = $this->handleFileUpload($request, 'identification', 'identification');

            // Prepare the data to be updated
            $data = [
                'phone_number' => $request->phone_number,
                'qualification' => $request->qualification,
                'membership_category' => $request->membership_category,
                'amount' => $request->amount,
                // If a new file was uploaded, update the path
                'certification_path' => $certificationPath ? 'assets/application/certifications/'.$certificationPath : $application->certification_path,
                'academic_qualifications_path' => $academicQualificationsPath ? 'assets/application/academic_qualifications/'.$academicQualificationsPath : $application->academic_qualifications_path,
                'work_experience_path' => $workExperiencePath ? 'assets/application/work_experience/'.$workExperiencePath : $application->work_experience_path,
                'professional_certifications_path' => $professionalCertificationsPath ? 'assets/application/professional_certifications/'.$professionalCertificationsPath : $application->professional_certifications_path,
                'identification_path' => $identificationPath ? 'assets/application/identifications/'.$identificationPath : $application->identification_path,
            ];

            // Update the application
            $application->update($data);

            
            // Send a success message after updating
            $message = 'Your application has been updated successfully. Your document will be review';
            $this->sendMessage($application->user_email, $message);

        

            return redirect()->back()->with('success', 'Application updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred during the update: ' . $e->getMessage());
        }
    }


    private function handleFileUpload(Request $request, $fieldName, $folderName)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $filePath = time() . '.' . $image->extension();
            $image->move(public_path("assets/application/{$folderName}/"), $filePath);
            return $filePath;
        }
        return null;
    }

    private function processOpayPayment($application)
    { 
        $paymentResponse = $this->opayService->paymentData($application);

        if ($paymentResponse instanceof \Illuminate\Http\JsonResponse) {
            $paymentResponse = $paymentResponse->getData(true); 
        }
        // dd($paymentResponse);

        if ($paymentResponse['data']['code'] === '00000') {
            return redirect($paymentResponse['data']['data']['cashierUrl']);  
        } else {
            return back()->withErrors('Payment initiation failed: ' . $paymentResponse['message']);
        }
    }

    

    private function sendMessage($email, $message)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            Mail::to($email)->send(new ApplicationStatusNotification($message));
        } else {
            return redirect()->back()->with('error', 'Invalid or missing email address.');
        }
    }

    private function processPaystackPayment($application, $transaction)
    { 
        $application_fee = $application->amount;
        $paystack = new \Yabacon\Paystack(env('PAYSTACK_SECRET_KEY'));
       
        try {
         
            $tranx = $paystack->transaction->initialize([
                'amount' => $application_fee * 100, // Payment amount in kobo
                'email' => $application->user_email,
                'payment_status' => 'pending',
                'reference' => $application->reference,
            ]);
            
            $transaction->update([
                'payment_status' => 'pending',
                'transaction_reference' => $tranx->data->reference, 
            ]);
    
            return redirect($tranx->data->authorization_url);
        } catch (\Exception $e) {
            $transaction->update([
                'payment_status' => 'failed',
                'transaction_reference' => null,
            ]);
    
            return redirect()->back()->with('error', 'An error occurred processPaystackPayment: ' . $e->getMessage());
        }
    } 

    private function processMoniepointPayment($application, $transaction)
    {
        // Implement Moniepoint payment initialization here
        return response()->json([
            'message' => 'Moniepoint payment integration is under development.',
            'reference' => $application->reference,
        ]);
    }

   

    

}
