<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Model\Supplier;
use Carbon\Carbon;

class UserController extends Controller
{
  /*--------------------Customer------------------------*/
	public function getAllCustomer()
    {
        $customers = User::latest()->orderBy('id', 'desc')->get();
        if(count($customers)>0){
            return view('admin.pages.customers',['customers'=>$customers]);
        } else {
            abort(404);
        }
    }
    public function CreateCustomer(Request $request)
    {
    	 $this->validate($request, [
                'name'            => 'required|min:5',
                'email'           => 'required|unique:users|min:5',
                'mobile_number'   => 'required|min:10|max:10',
                'password'        => 'required|min:2 ',  
                'dob'             => 'required',
                'gender'             => 'required',   
              ]);

    	$result = new User();
        $result->name           = $request['name'];
        $result->email          = $request['email'];
        $result->mobile_number  = $request['mobile_number'];
        $result->password       = Hash::make($request['password']);
        $result->dob            =Carbon::parse($request->dob)->format('d-m-Y');
        $result->gender  = $request['gender'];

        if($result->save())
        {
               connectify('success', 'Haa Haa 😊 ', '  Customer Create 😊 Successfully.');
            return redirect()->back()->with('success','😊 Customer Create 😊 Successfully 😊');
        }
        else
        { 
        	 connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
        	return redirect()->back()->with('error' ,'🙁 Something went wrong!!🙁 Please Try again 🙁');
        }
    }
    /*--------------------Supplier------------------------*/
    public function getAllSuppliers()
    {
        $suppliers = Supplier::latest()->orderBy('id', 'desc')->get();
        if(count($suppliers)>0){
            return view('admin.pages.suppliers',['suppliers'=>$suppliers]);
        } else {
            abort(404);
        }
    }

         public function CreateSupplier(Request $request)
    {
       $this->validate($request, [
                'name'            => 'required|min:3',
                'email'           => 'required|unique:supplier|min:10',
                'mobile_number'   => 'required|min:5',
                'password'        => 'required|min:5',
                'location'        => 'required|min:6 ',    
                'document'        => 'mimes:pdf,word|required|max:20000',  
                'company_details' => 'required|min:15 '    
              ]);
       
      $result = new Supplier();
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
             $request->document->move(public_path('supplier/document'), $document);
            connectify('success', 'Haa Haa 😊 ', ' supplier Created 😊 Successfully.');
            return redirect()->back()->with('success','😊 ​​​​​supplier Created 😊 Successfully 😊');
        }
        else
        {
            connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
          return redirect()->back()->with('error' ,'🙁 Something went wrong!!🙁 Please Try again 🙁');
        }
    }
}
