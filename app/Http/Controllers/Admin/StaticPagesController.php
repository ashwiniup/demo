<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Staticpages;
use Illuminate\Support\Facades\Crypt;

class StaticPagesController extends Controller
{
    	public function getAllPages()
    {
        $Staticpages = Staticpages::latest()->orderBy('id', 'desc')->get();
        if(count($Staticpages)>0){
            return view('admin.pages.static-pages.static-pages',['Staticpages'=>$Staticpages]);
        } else {
            abort(404);
        }
    }

     public function CreatePage(Request $request)
    {
    	 $this->validate($request, [
                'page_name'        => 'required|min:2',
                'slug'             => 'required|min:5',
                'm_keywords'       => 'required|min:5',
                'm_description'    => 'required|min:2 ',  
                'page_description' => 'required', 
              ]);

    	$result = new Staticpages();
        $result->page_name         = $request['page_name'];
        $result->slug              = $request['slug'];
        $result->m_keywords        = $request['m_keywords'];
        $result->m_description     = $request['m_description'];
        $result->page_description  = $request['page_description'];

        if($result->save())
        {
               connectify('success', 'Haa Haa 😊 ', '  New Page Created 😊 Successfully.');
            return redirect()->route('static-pages')->with('success','😊 New Page Created  😊 Successfully 😊');
        }
        else
        { 
        	 connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
        	return redirect()->back()->with('error' ,'🙁 Something went wrong!!🙁 Please Try again 🙁');
        }
    }

    public function editPageView($id)
    {

       try {
           $decrypted    = Crypt::decrypt($id);
           $getResult    = Staticpages::where('Id',$decrypted)->first();
           $getResults   = Staticpages::select('id')->latest()->get();

           if(!is_null($getResult)){
            return view('admin.pages.static-pages.edit-page',['getResult'=>$getResult,'getResults'=>$getResults]);
           } else {
            return redirect()->back()->with('error','Oops ! No Data found for specific id');
           }

       } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
           abort(404);
       }
    }
        public function putPage(Request $request)
    {
        $this->validate($request, [
            'page_name'        => 'required|min:2',
            'slug'             => 'required|min:5',
            'm_keywords'       => 'required|min:5',
            'm_description'    => 'required|min:2 ',  
            'page_description' => 'required',  
         ]);
        $id                = Crypt::decrypt($request['id']);
        $page_name         = strip_tags($request['page_name']);
        $slug              = strip_tags($request['slug']);
        $m_keywords        = strip_tags($request['m_keywords']);
        $m_description     = strip_tags($request['m_description']);
        $page_description  = $request['page_description'];

        $updatePage  = Staticpages::where('id',$id)->update([
            'page_name'        => $page_name,
            'slug'             => $slug,
            'm_keywords'       => $m_keywords,
            'm_description'    => $m_description,
            'page_description' => $page_description,
        ]);

        if($updatePage){
             connectify('success', 'Haa Haa 😊 ', ' Page Updated 😊 Successfully.'); 
            return redirect()->route('static-pages')->with('success','Page Updated 😊 Successfully');
        } else{
            connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
            return redirect()->back()->with('error','Oops ! Something went wrong');
        }
    }
    public function deletePage($id)
    {
        $id         =   Crypt::decrypt($id);
        $Restricted =   Staticpages::where('id',$id)->delete();

        if($Restricted){
             connectify('success', 'success ', '😪 ​​​​​ Page has been deleted Successfully.😪');
            return redirect()->back()->with('success',' Page has been deleted  successfully');
        } else {
              connectify('error', 'Oops 💁', '! Something went wrong 💁.');
            return redirect()->back()->with('error','Oops ! Something went wrong');
        }
    }
}
