<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Setting;
use App\Model\Appsetting;
use Illuminate\Http\Request;

class AppsettingController extends Controller
{
        /*========Themes Setting============*/
    public function Themes(Request $request)
    {
         $theme_name    = strip_tags($request['radiobt']);

         $set  = Setting::where('id', 1)
                        ->update(['theme_name' => $theme_name ]);
        if($set)
        {
            connectify('success', '😊 Awesome 😊', 'Theme Change Successfully');
            return redirect()->back();
        } else {
            connectify('error', '🙁 Ooops 🙁', 'Something Went Wrong. Try Again');
            return redirect()->back();
        }
    }
      /*========App Setting============*/
    public function AppSetting(Request $request)
    {
      $this->validate($request, [
           'logo'       => 'required|mimes:png|max:1024|dimensions:max_width=250,max_height=60',
           'small_logo' => 'required|mimes:png|max:1024|dimensions:max_width=250,max_height=60',
           'favicon'    => 'required|mimes:png|max:512|dimensions:min_width=32,min_height=32,max_width=32,max_height=32',
        ]);
        if($request->hasFile('logo')) {
        	    $fileName = 'logo.'.$request->logo->extension();  
        	    $request->logo->storeAs('logo',$fileName, 'public');
                $logo = $fileName;

                //if file chnage then delete old one
                $oldFile = $request->get('logo','');
                if( $oldFile != ''){
                    $file_path = "public/logo/".$oldFile;
                    Storage::delete($file_path);
                }
            }
            else{
                $logo = $request->get('logo','');
            }

            if($request->hasFile('small_logo')) {
            	$fileName = 'small_logo.'.$request->small_logo->extension();   
                  $request->small_logo->storeAs('logo',$fileName, 'public');
               
                 $small_logo = $fileName;

                //if file chnage then delete old one
                $oldFile = $request->get('oldLogoSmall','');
                if( $oldFile != ''){
                    $file_path = "public/logo/".$oldFile;
                    Storage::delete($file_path);
                }
            }
            else{
                $small_logo['small_logo'] = $request->get('oldLogoSmall','');
            }

            if($request->hasFile('favicon')) {
            	$fileName = 'favicon.'.$request->favicon->extension();  
                $request->favicon->storeAs('logo',$fileName, 'public');
                 
                $favicon = $fileName;

                //if file chnage then delete old one
                $oldFile = $request->get('oldFavicon','');
                if( $oldFile != ''){
                    $file_path = "public/logo/".$oldFile;
                    Storage::delete($file_path);
                }
            }
            else{
                $favicon['favicon'] = $request->get('oldFavicon','');
            }

             $result= Appsetting::where('id', 2)->update([
                'logo' => $logo,
                'small_logo' => $small_logo,
                'favicon' => $favicon,
            ]);

        if($result)
        {
          connectify('success', 'Ha Ha 😊', 'App Setting Update Successfully');
            return redirect()->back();
         } else {
            connectify('error', 'Ooops 🙁', 'Something Went Wrong. Try Again. Try Again');
            return redirect()->back();
        }   
    }

}
