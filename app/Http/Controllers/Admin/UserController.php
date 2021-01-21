<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Model\Supplier;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

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
                'gender'          => 'required',   
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
     public function editSupplierView($id)
    {

       try {
           $decrypted    = Crypt::decrypt($id);
           $getResult    = Supplier::where('Id',$decrypted)->first();
           $getResults   = Supplier::select('id')->latest()->get();

           if(!is_null($getResult)){
            return view('admin.pages.edit.edit-supplier',['getResult'=>$getResult,'getResults'=>$getResults]);
           } else {
            return redirect()->back()->with('error','Oops ! No Data found for specific id');
           }

       } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
           abort(404);
       }
    }

    public function putSupplier(Request $request)
    {
        $this->validate($request, [
            'name'            => 'required|min:3',
            'email'           => 'required|min:10',
            'mobile_number'   => 'required|min:5',
            'password'        => 'required|min:5',
            'location'        => 'required|min:6 ',    
            'company_details' => 'required|min:15 '    
         ]);
        $id              = Crypt::decrypt($request['id']);
        $name            = strip_tags($request['name']);
        $email           = strip_tags($request['email']);
        $mobile_number   = strip_tags($request['mobile_number']);
        $password        =  Hash::make($request['password']);
        $location        = strip_tags($request['location']);
        $company_details = strip_tags($request['company_details']);

        $updateSupplier = Supplier::where('id',$id)->update([
            'name'             => $name,
            'email'            => $email,
            'mobile_number'    => $mobile_number,
            'password'         => $password,
            'location'         => $location,
            'company_details'  => $company_details,
        ]);

        if($updateSupplier){
             connectify('success', 'Haa Haa 😊 ', ' Supplier Updated 😊 Successfully.'); 
            return redirect()->route('suppliers')->with('success','Supplier Updated 😊 Successfully');
        } else{
            connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
            return redirect()->back()->with('error','Oops ! Something went wrong');
        }
    }

     public function deleteSupplier($id)
    {
        $id         =   Crypt::decrypt($id);
        $Restricted =   Supplier::where('id',$id)->delete();

        if($Restricted){
             connectify('success', 'success ', '😪 ​​​​​ Supplier has been deleted Successfully.😪');
            return redirect()->back()->with('success',' Supplier has been deleted  successfully');
        } else {
              connectify('error', 'Oops 💁', '! Something went wrong 💁.');
            return redirect()->back()->with('error','Oops ! Something went wrong');
        }
    }
     public function changeStatus(Request $request)
    {
        $user = Supplier::find($request->user_id);
        $user->status = $request->status;
       
     if( $user->save())
        {
            
            connectify('success', 'Haa Haa 😊 ', ' Status  Updated 😊 Successfully.');
            return redirect()->back()->with('success','😊 ​​​​​supplier Created 😊 Successfully 😊');
        }
        else
        {
            connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
          return redirect()->back()->with('error' ,'🙁 Something went wrong!!🙁 Please Try again 🙁');
        }
       
    }

}
