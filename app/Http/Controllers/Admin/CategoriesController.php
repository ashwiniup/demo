<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories;
use Illuminate\Support\Facades\Crypt;

class CategoriesController extends Controller
{
		public function getAllCategories()
    {
        $Categories = Categories::latest()->orderBy('id', 'desc')->get();
        if(count($Categories)>0){
            return view('admin.pages.categories.categories',['Categories'=>$Categories]);
        } else {
            abort(404);
        }
    }
	 public function CreateCategory(Request $request)
    {
    	 $this->validate($request, [

                'categories'       => 'required|min:2',
                'title'            => 'required|min:2',
                'slug'             => 'required|min:5',
                'm_keywords'       => 'required|min:5',
                'm_description'    => 'required|min:2 ',  
                'p_data'           => 'required', 
              ]);

    	$result = new Categories();
        $result->categories        = $request['categories'];
        $result->title             = $request['title'];
        $result->slug              = $request['slug'];
        $result->m_keywords        = $request['m_keywords'];
        $result->m_description     = $request['m_description'];
        $result->p_data            = $request['p_data'];

        if($result->save())
        {
               connectify('success', 'Haa Haa 😊 ', 'New Category  Created 😊 Successfully.');
            return redirect()->route('categories')->with('success','😊 New Category Created  😊 Successfully 😊');
        }
        else
        { 
        	 connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
        	return redirect()->back()->with('error' ,'🙁 Something went wrong!!🙁 Please Try again 🙁');
        }
    }
       public function editCategoryView($id)
    {

       try {
           $decrypted    = Crypt::decrypt($id);
           $getResult    = Categories::where('Id',$decrypted)->first();
           $getResults   = Categories::select('id')->latest()->get();

           if(!is_null($getResult)){
            return view('admin.pages.categories.edit-categories',['getResult'=>$getResult,'getResults'=>$getResults]);
           } else {
            return redirect()->back()->with('error','Oops ! No Data found for specific id');
           }

       } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
           abort(404);
       }
    }
     public function putCategory(Request $request)
    {
        $this->validate($request, [
            'categories'       => 'required|min:2',
            'title'            => 'required|min:2',
            'slug'             => 'required|min:5',
            'm_keywords'       => 'required|min:5',
            'm_description'    => 'required|min:2 ',  
            'p_data'           => 'required', 
         ]);
        $id                = Crypt::decrypt($request['id']);
        $categories        = strip_tags($request['categories']);
        $title             = strip_tags($request['title']);
        $slug              = strip_tags($request['slug']);
        $m_keywords        = strip_tags($request['m_keywords']);
        $m_description     = strip_tags($request['m_description']);
        $p_data            = $request['p_data'];

        $updatePage  = Categories::where('id',$id)->update([
            'categories'       => $categories,
            'title'            => $title,
            'slug'             => $slug,
            'm_keywords'       => $m_keywords,
            'm_description'    => $m_description,
            'p_data'           => $p_data,
        ]);

        if($updatePage){
             connectify('success', 'Haa Haa 😊 ', ' Category Updated 😊 Successfully.'); 
            return redirect()->route('categories')->with('success','Category Updated 😊 Successfully');
        } else{
            connectify('error', 'Ooops 🙁', 'Something went wrong!!🙁 Please Try again.');
            return redirect()->back()->with('error','Oops ! Something went wrong');
        }
    }
      public function deleteCategory($id)
    {
        $id         =   Crypt::decrypt($id);
        $Restricted =   Categories::where('id',$id)->delete();

        if($Restricted){
             connectify('success', 'success ', '😪 ​​​​​ Category has been deleted Successfully.😪');
            return redirect()->back()->with('success',' Category has been deleted  successfully');
        } else {
              connectify('error', 'Oops 💁', '! Something went wrong 💁.');
            return redirect()->back()->with('error','Oops ! Something went wrong');
        }
    }
}
