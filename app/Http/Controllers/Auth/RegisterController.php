<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Events\UserCreating;
use Mail;
use Http;   
use App\Mail\MailNotify;
use App\Mail\VerificationEmail;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Models\Notifications;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    
    use RegistersUsers;

    
   // protected $redirectTo = ::HOME;
    protected $redirectTo = '/processpaper';
    
    protected function validator(array $data)
    {
        return  $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
        ]);
    } 

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    
   

    public function verify($token)
    {
        if ( ! $token)
        {
            return  redirect('processpapers')->with('flash-error','Email Verification Token not provided!');
        }
        
        $user = User::where('email_token',$token)->first();
        if ( ! $user)
        {
            return  redirect('processpapers')->with('flash-error','Invalid Email Verification Token!');
        }

        $user->verified = 1;

        if ($user->save()) {
            $id = $user->id;
            $email = $user->email;
            $fullname = $user->fullname;

            $notification = [
                'user_id' => $id,
                'user_email' => $email,
                'fullname' => $fullname,
                'userType' => 'user',
                'title'=>'User account creation',
                'message' => 'A new user account has been created.',
                // Add any other relevant data for the notification
            ];
    
            // Save the notification record in the Notification table
            Notifications::create($notification);
 
            $email = new EmailConfirmation($user);
            Mail::to($user->email)->send($email);
           
            return view('frontend.emails.emailconfirm',['user'=>$user]);

        }
    }

    public function register(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
            // 'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Send verification email
        Mail::to($user->email)->send(new VerificationEmail($user));

        // Redirect to the intended page or dashboard
        return redirect()->back()->with('success', 'Registration successful!, Please Login');
    }
}
