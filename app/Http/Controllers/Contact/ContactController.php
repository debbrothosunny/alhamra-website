<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Models\contactheader;
use App\Models\contactcontent;


class ContactController extends Controller
{
     // ----------------Contact Header Section Start -------------------

     public function contact_header(){
        $contact_header = contactheader::OrderBy('id','DESC')->get();
        return view('backend.contactpage.contact_header',compact('contact_header'));
    }
    //Contact Header Create
    public function contact_header_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $contact_header= new contactheader;
        $contact_header -> title=$request->title;
        

        if($request->file('bg_image')){

            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $contact_header['bg_image']= $filename;
        }

        $contact_header->save();

        $success = [
            'message' => 'Successfully! Header Create',
            'alert-type' => 'success',
        ];

        $fail = [
            'message' => 'Something  Wrong',
            'alert-type' => 'error',
        ];

        if($request){
            return back()->with($success);
            }
            else{
            return back()->with($fail);
        }
    }

    // Contact Header edit
    public function contact_header_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'required',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $contact_header= contactheader::find($id);

        $contact_header-> title=$request->title;

        if($request->file('bg_image')){

            if (File::exists('assets/img/uploaded/'.$contact_header->bg_image)) {
                File::delete('assets/img/uploaded/'.$contact_header->bg_image);
                     }
            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $contact_header['bg_image']= $filename;
        }

        $contact_header->save();
        $success = [
            'message' => 'Header Edited Successfully',
            'alert-type' => 'success',
        ];

        $fail = [
            'message' => 'Something  Wrong',
            'alert-type' => 'error',
        ];

        if($request){
            return back()->with($success);
            }else{
            return back()->with($fail);
        }

    }

    // Contact Header Delete

    public function contact_header_destroy(Request $request ,$id)
    {
        $contact_header_destroy= contactheader::find($id);

        if (File::exists('assets/img/uploaded/'.$contact_header_destroy->image)) {
            File::delete('assets/img/uploaded/'.$contact_header_destroy->image);

            $contact_header_destroy->delete();
        }
        $success = [
            'message' => 'Header Deleted Successfully',
            'alert-type' => 'success',
        ];

        $fail = [
            'message' => 'Something  Wrong',
            'alert-type' => 'error',
        ];

        if($request){
            return back()->with($success);
            }else{
            return back()->with($fail);
        }

    }


    // --------------------------------Contact Header End-------------------------------

    // --------------------------------Contact Content Start----------------------------

    public function contact_content(){
        $contact_content = contactcontent::OrderBy('id','DESC')->get();
        return view('backend.contactpage.contact_content.contact_content',compact('contact_content'));
    }
    //Header Create
    public function contact_content_create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'description'=>'required',
            
        ]);

        $contact_content_create= new contactcontent;
        $contact_content_create -> name=$request->name;
        $contact_content_create -> email=$request->email;
        $contact_content_create -> subject=$request->subject;
        $contact_content_create -> description=$request->description;

        $contact_content_create->save();

        $success = [
            'message' => 'Successfully! Header Create',
            'alert-type' => 'success',
        ];

        $fail = [
            'message' => 'Something  Wrong',
            'alert-type' => 'error',
        ];

        if($request){
            return back()->with($success);
            }
            else{
            return back()->with($fail);
        }
    }

}
