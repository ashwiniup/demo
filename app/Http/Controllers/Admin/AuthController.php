<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\PasswordReset;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{

    protected $hasher;
    public function __construct(HasherContract $hasher)
     {
        $this->hasher = $hasher;
     }

     public function checkLogin()
     {
    if (Auth::guard('admin')->user()) 
       {
         return redirect(route('dashboard'));
       }
    else
       {
            return view('admin.auth.login');
       }
}

      public function index()
    {
      date_default_timezone_set('Asia/Calcutta');

       // 24-hour format of an hour without leading zeros (0 through 23)
       $Hour = date('H');

        if ( $Hour >= 0 && $Hour <= 11 ) {          /*Good morning (12am-12pm)*/
            $greetings= "🌞 Good Morning ➯ 😀";
        } else if ( $Hour >= 12 && $Hour <= 15 ) {  /*Good after noon (12pm -4pm)*/
            $greetings= "🌗 Good Afternoon ➯ 🥱";
        } else if ( $Hour >= 16 && $Hour <= 19 ) {  /*Good evening (4pm to 9pm)*/
           $greetings= "🌘 Good Evening ➯ 😄";
        } else if ( $Hour >= 20 && $Hour <= 24 ) {  /*Good night ( 9pm to 6am)*/
           $greetings= "🌚 Good Night ➯ 😌";
        }
        $email = Auth::guard('admin')->user()->email;
        $name  = Auth::guard('admin')->user()->name;
        $image  = Auth::guard('admin')->user()->image;
        return view('admin.welcome', compact('greetings','name','email','image')); 
    }

      public function Singnup(Request $request)
    {
       $this->validate($request, [
                'name'            => 'required|min:3',
                'email'           => 'required|unique:users|min:10',
                'mobile_number'   => 'required|min:5',
                'password'        => 'required|min:5',
                'location'        => 'required|min:6 ',    
                'document'        => 'mimes:pdf,word|required|max:20000',  
                'company_details' => 'required|min:15 '    
              ]);
       
      $result = new User();
        $result->name           = $request['name'];
        $result->email          = $request['email'];
        $result->mobile_number  = $request['mobile_number'];
        $result->password       = Hash::make($request['password']);
        $result->location       = $request['location'];
        $result->company_details    = $request['company_details'];
        $document              = time().'.'.$request->document->extension();  
        $result->document      =   $document;
        if($result->save())
        {
             $request->document->move(public_path('images/document'), $document);
            connectify('success', 'Haa Haa 😊 ', ' Signup 😊 Successfully.');
            return redirect()->route('ts-admin')->with('success','😊 ​​​​​Signup 😊 Successfully 😊');
        }
        else
        {
            connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
          return redirect()->back()->with('error' ,'🙁 Something went wrong!!🙁 Please Try again 🙁');
        }
    }

      /* Post: Login into Admin Panel */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email|max:255|min:5',
            'password'  => 'required|min:8'
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        $remember= $request->get('remember') ? true : false; 
        $user_check  = Admin::where('email','=',$email)->first();
        if(!$user_check)
        {
             connectify('error', '🙁 Ooops 🙁', 'Invalid Email ! Try Again');
            return redirect()->back()->with('error','Your email/password combination was incorrect!');
        }

        if (Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']], $remember))
        {
              connectify('success', '🙏 Welcome 🙏', 'Logged In Successfully');
            return redirect()->route('dashboard')->with('success','Login Successfull');
        }
        else {
            connectify('error', '🙁 Ooops 🙁', 'Invalid Password ! Try Again');
            return redirect()->back()->with('error','Invalid Password ! Try Again');
        }
    }
       /* Post: Change admin Profile */
    public function changeProfile(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|string|min:3|max:20',
            'email' => 'required|string|min:8|max:30|email',
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
         
        
        $imagefile=public_path('admin/images/profile/'.Auth::guard('admin')->user()->image); //delete old image
          if (File::exists($imagefile)) { // unlink or remove previous image from folder
                  unlink($imagefile);
               }
        $result = Auth::guard('admin')->user();
        $result->name   = strip_tags($request['name']);
        $result->email  = strip_tags($request['email']);
        $imagename             = 'AZ_'.$request->image->getClientOriginalName();  
        $result->image     =   $imagename;

        if($result->save())
        {
          $request->image->move(public_path('admin/images/profile'), $imagename);
          connectify('success', 'Ha Ha 😊', 'Profile Changed Successfully');
            return redirect()->back();
         } else {
            connectify('error', 'Ooops 🙁', 'Something Went Wrong. Try Again. Try Again');
            return redirect()->back();
        }  
    }
      /* Post: Change admin Password */
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'old_password'  => 'required|min:8',
            'password'      => 'required|min:8',
            'password_confirmation' =>'required|required_with:password|same:password',
        ]);

        $password           = bcrypt($request['password']);
        $user_email         = Auth::guard('admin')->user()->email;
        $user               = Admin::where('email', $user_email)->first(); //get Admin data
        $existingpassword   = Hash::check($request['old_password'], $user->password); //check password

        if($existingpassword)
        {
            Admin::where('email',$user_email)->update(['password' => $password,]);
            Auth::logout();
            Session::flush();
            connectify('success', 'Ha Ha 😊', 'Password Changed Successfully');
            return redirect()->route('ts-admin');

        } else {
            connectify('error', 'Ooops 🙁', 'Old passord doesn\'t match! Try Again');
            return redirect()->back();
        }
    }
     /*Get: Logout Admin */
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        connectify('success', 'We will Miss You 😭', 'Logged Out Successfully');
        return redirect()->route('ts-admin');
    }
}
