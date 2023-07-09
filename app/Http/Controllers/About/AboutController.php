<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Models\aboutheader;
use App\Models\ourqualities;
use App\Models\whychooseustitle;
use App\Models\whychooseuscontent;
use App\Models\ourplancontent;
use App\Models\ourmanagementtitle;
use App\Models\deadline;
use App\Models\deadlinecontent;



class AboutController extends Controller
{
    // ----------------About Header Section Start -------------------

    public function about_header(){
        $about_header = aboutheader::OrderBy('id','DESC')->get();
        return view('backend.aboutpage.about_header.about_header',compact('about_header'));
    }
    //About Header Create
    public function about_header_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $about_header_create= new aboutheader;
        $about_header_create -> title=$request->title;

        if($request->file('bg_image')){

            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $about_header_create['bg_image']= $filename;
        }

        $about_header_create->save();

        $success = [
            'message' => 'Successfully! About Header Create',
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

    // About header edit
    public function about_header_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'required',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $about_header= aboutheader::find($id);
        $about_header-> title=$request->title;

        if($request->file('bg_image')){

            if (File::exists('assets/img/uploaded/'.$about_header->bg_image)) {
                File::delete('assets/img/uploaded/'.$about_header->bg_image);
                     }
            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $about_header['bg_image']= $filename;
        }

        $about_header->save();
        $success = [
            'message' => 'About Header Edited Successfully',
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



    // About Header Delete
    public function about_header_destroy(Request $request ,$id)
    {
        $header= aboutheader::find($id);

        if (File::exists('assets/img/uploaded/'.$about_header_destroy->bg_image)) {
            File::delete('assets/img/uploaded/'.$about_header_destroy->bg_image);

            $about_header_destroy->delete();
        }
        $success = [
            'message' => 'About Header Deleted Successfully',
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

    // ----------------About Header Section End -------------------

    // ----------------Our Qualities Section Start -------------------


    
    public function our_qualities(){
        $our_qualities = ourqualities::OrderBy('id','DESC')->get();
        return view('backend.aboutpage.our_qualities.our_qualities',compact('our_qualities'));
    }
    //About Header Create
    public function our_qualities_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'title_1'=>'required',
            'title_2'=>'required',
            'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $our_qualities_create= new ourqualities;
        $our_qualities_create -> title=$request->title;
        $our_qualities_create -> description=$request->description;
        $our_qualities_create -> title_1=$request->title_1;
        $our_qualities_create -> title_2=$request->title_2;

        if($request->file('image')){

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $our_qualities_create['image']= $filename;
        }

        $our_qualities_create->save();

        $success = [
            'message' => 'Successfully! About Header Create',
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

    // our_qualities edit
    public function our_qualities_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'description'=>'nullable',
            'title_1'=>'nullable',
            'title_2'=>'nullable',
            'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $our_qualities= ourqualities::find($id);
        $our_qualities-> title=$request->title;
        $our_qualities-> description=$request->description;
        $our_qualities-> title_1=$request->title_1;
        $our_qualities-> title_2=$request->title_2;

        if($request->file('image')){

            if (File::exists('assets/img/uploaded/'.$our_qualities->image)) {
                File::delete('assets/img/uploaded/'.$our_qualities->image);
                     }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $our_qualities['image']= $filename;
        }

        $our_qualities->save();
        $success = [
            'message' => 'our qualities Edited Successfully',
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



    // Our Qualities Delete
    public function our_qualities_destroy(Request $request ,$id)
    {
        $our_qualities_destroy= ourqualities::find($id);

        if (File::exists('assets/img/uploaded/'.$our_qualities_destroy->image)) {
            File::delete('assets/img/uploaded/'.$our_qualities_destroy->image);

            $our_qualities_destroy->delete();
        }
        $success = [
            'message' => 'our qualities Deleted Successfully',
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

        // ---------------------Our Qualities end-----------------------

        // ---------------------Why You Choose US Title Start-----------

        

    
    public function why_choose_us_title(){
        $why_choose_us_title = whychooseustitle::OrderBy('id','DESC')->get();
        return view('backend.aboutpage.why_choose_us.why_choose_us_title',compact('why_choose_us_title'));
    }
    //Why You Choose US Title Create
    public function why_choose_us_title_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
            
        ]);

        $why_choose_us_title_create= new whychooseustitle;
        $why_choose_us_title_create -> title=$request->title;
        $why_choose_us_title_create -> sub_title=$request->sub_title;

        $why_choose_us_title_create->save();

        $success = [
            'message' => 'Successfully! Title Create',
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

    // Why You Choose US Title edit
    public function why_choose_us_title_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'sub_title'=>'nullable',
        ]);

        $why_choose_us_title= whychooseustitle::find($id);
        $why_choose_us_title -> title=$request->title;
        $why_choose_us_title -> sub_title=$request->sub_title;

        $why_choose_us_title->save();
        $success = [
            'message' => ' Title Edited Successfully',
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



    //Why You Choose US Title Delete

    public function why_choose_us_title_destroy(Request $request ,$id)
    {
        $why_choose_us_title_destroy= whychooseustitle::find($id);

        if (File::exists('assets/img/uploaded/'.$why_choose_us_title_destroy->image)) {
            File::delete('assets/img/uploaded/'.$why_choose_us_title_destroy->image);

            $why_choose_us_title_destroy->delete();
        }
        $success = [
            'message' => ' Title Deleted Successfully',
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

    //------------------------Why You Choose US Title End---------------------------

       // ----------------Why You Choose US Content Start -------------------


    
       public function why_choose_us_content(){
        $why_choose_us_content = whychooseuscontent::OrderBy('id','DESC')->get();
        return view('backend.aboutpage.why_choose_us.why_choose_us_content.why_choose_us_content',compact('why_choose_us_content'));
    }
    //Why You Choose US Content Create
    public function why_choose_us_content_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'icon'=>'required',
            
        ]);

        $why_choose_us_content_create= new whychooseuscontent;
        $why_choose_us_content_create -> title=$request->title;
        $why_choose_us_content_create -> description=$request->description;
        $why_choose_us_content_create -> icon=$request->icon;
       
        $why_choose_us_content_create->save();

        $success = [
            'message' => 'Successfully! Content Create',
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

    // Why You Choose US Content edit
    public function why_choose_us_content_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'description'=>'nullable',
            'icon'=>'nullable',
           
        ]);

        $why_choose_us_content= whychooseuscontent::find($id);
        $why_choose_us_content-> title=$request->title;
        $why_choose_us_content-> description=$request->description;
        $why_choose_us_content-> icon=$request->icon;


        $why_choose_us_content->save();
        $success = [
            'message' => 'Content Edited Successfully',
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



    // Why You Choose US Content Delete
    public function why_choose_us_content_destroy(Request $request ,$id)
    {
        $why_choose_us_content_destroy= whychooseuscontent::find($id);

        if (File::exists('assets/img/uploaded/'.$why_choose_us_content_destroy->image)) {
            File::delete('assets/img/uploaded/'.$why_choose_us_content_destroy->image);

            $why_choose_us_content_destroy->delete();
        }
        $success = [
            'message' => 'Content Deleted Successfully',
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



    // ----------------Our Plan Content Start -------------------


    
    public function our_plan(){
        $our_plan = ourplancontent::OrderBy('id','DESC')->get();
        return view('backend.aboutpage.our_plan_section.our_plan',compact('our_plan'));
    }
    //Our Plan Content Create
    public function our_plan_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $our_plan_create= new ourplancontent;
        $our_plan_create -> title=$request->title;
        $our_plan_create -> description=$request->description;

        if($request->file('image')){

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $our_plan_create['image']= $filename;
        }

        $our_plan_create->save();

        $success = [
            'message' => 'Successfully! About Header Create',
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

    // Our Plan Content edit
    public function our_plan_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'description'=>'nullable',
            'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $our_plan= ourplancontent::find($id);
        $our_plan-> title=$request->title;
        $our_plan-> description=$request->description;

        if($request->file('image')){

            if (File::exists('assets/img/uploaded/'.$our_plan->image)) {
                File::delete('assets/img/uploaded/'.$our_plan->image);
                     }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $our_plan['image']= $filename;
        }

        $our_plan->save();
        $success = [
            'message' => 'our qualities Edited Successfully',
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



    // Our Plan Content Delete
    public function our_plan_destroy(Request $request ,$id)
    {
        $our_plan_destroy= ourplancontent::find($id);

        if (File::exists('assets/img/uploaded/'.$our_plan_destroy->image)) {
            File::delete('assets/img/uploaded/'.$our_plan_destroy->image);

            $our_plan_destroy->delete();
        }
        $success = [
            'message' => 'our qualities Deleted Successfully',
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
    // ---------------Our Plan Content End----------------------

    // ---------------Our Management Title Start----------------

 public function our_management_title(){
        $our_management_title = ourmanagementtitle::OrderBy('id','DESC')->get();
        return view('backend.aboutpage.our_management.our_management_title',compact('our_management_title'));
    }
    //Our Management Title Create
    public function our_management_title_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);

        $our_management_title_create= new ourmanagementtitle;
        $our_management_title_create -> title=$request->title;

        $our_management_title_create->save();

        $success = [
            'message' => 'Successfully! Our Management Title Create',
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

    // Our Management Title edit
    public function our_management_title_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
        ]);

        $our_management_title= ourmanagementtitle::find($id);
        $our_management_title-> title=$request->title;

        $our_management_title->save();
        $success = [
            'message' => 'Our Management Title Edited Successfully',
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

    // Our Management Title Delete
    public function our_management_title_destroy(Request $request ,$id)
    {
        $our_management_title_destroy= ourmanagementtitle::find($id);

        if (File::exists('assets/img/uploaded/'.$our_management_title_destroy->image)) {
            File::delete('assets/img/uploaded/'.$our_management_title_destroy->image);

            $our_management_title_destroy->delete();
        }
        $success = [
            'message' => 'Our Management Title Deleted Successfully',
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

 // -----------------------Our Management Title End-----------------------------------------

 // -----------------------Our Management Deadline Start-------------------------------------
 

 public function our_management_deadline(){
    $our_management_deadline = deadline::OrderBy('id','DESC')->get();
    return view('backend.aboutpage.our_management.our_management_deadline.our_management_deadline',compact('our_management_deadline'));
}

//Our Management Deadline Create

public function our_management_deadline_create(Request $request)
{
    $request->validate([
        'deadline'=>'required',
        'status'=>'required',
        
    ]);

    $our_management_deadline_create= new deadline;
    $our_management_deadline_create -> deadline=$request->deadline;
    $our_management_deadline_create -> status=$request->status == true ? '0':'1';


    $our_management_deadline_create->save();

    $success = [
        'message' => 'Successfully! About Header Create',
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

// Our Management Deadline edit
public function our_management_deadline_update(Request $request , $id)
{
    $request->validate([
        'deadline'=>'nullable',
        'status'=>'nullable',
    ]);

    $our_management_deadline= deadline::find($id);
    $our_management_deadline-> deadline=$request->deadline;
    $our_management_deadline-> status=$request->status == true ? '0':'1';

    $our_management_deadline->save();
    $success = [
        'message' => 'Our Management Deadline Edited Successfully',
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



// Our Management Deadline Delete
public function our_management_deadline_destroy(Request $request ,$id)
{
    $our_management_deadline_destroy= deadline::find($id);

    if (File::exists('assets/img/uploaded/'.$our_management_deadline_destroy->image)) {
        File::delete('assets/img/uploaded/'.$our_management_deadline_destroy->image);

        $our_management_deadline_destroy->delete();
    }
    $success = [
        'message' => 'Our Management Deadline Deleted Successfully',
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


// --------------------------Our Management Deadline End-----------


 // ----------------Our Deadline Content Start -------------------

 public function our_deadline_content(){
    $our_deadline_content = deadlinecontent::OrderBy('id','DESC')->get();
    $our_management_deadline = deadline::OrderBy('id','DESC')->get();
    return view('backend.aboutpage.our_management.our_deadline_content.our_deadline_content',compact('our_deadline_content','our_management_deadline'));
}
//Our Deadline Content Create
public function our_deadline_content_create(Request $request)
{
    $request->validate([
        'deadline_id'=>'required',
        'title'=>'required',
        'position'=>'required', 
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        'status'=>'nullable',
    ]);

    $our_deadline_content_create= new deadlinecontent;
    $our_deadline_content_create -> deadline_id=$request->deadline_id;
    $our_deadline_content_create -> title=$request->title;
    $our_deadline_content_create -> position=$request->position;
    $our_deadline_content_create -> status=$request->status == true ? '0':'1';

    if($request->file('image')){

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $our_deadline_content_create['image']= $filename;
    }

    $our_deadline_content_create->save();

    $success = [
        'message' => 'Successfully! Our Deadline Content Create',
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

// Our Deadline Content edit
public function our_deadline_content_update(Request $request , $id)
{
    $request->validate([
        'deadline_id'=>'nullable',
        'title'=>'nullable',
        'position'=>'nullable',
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        'status'=>'required',
    ]);

    $our_deadline_content= deadlinecontent::find($id);
    $our_deadline_content -> deadline_id=$request->deadline_id;
    $our_deadline_content -> title=$request->title;
    $our_deadline_content -> position=$request->position;
    $our_deadline_content -> status=$request->status == true ? '0':'1';

    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$our_deadline_content->image)) {
            File::delete('assets/img/uploaded/'.$our_deadline_content->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $our_deadline_content['image']= $filename;
    }

    $our_deadline_content->save();
    $success = [
        'message' => 'Our Deadline Content Edited Successfully',
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

// Our Deadline Content Delete
public function our_deadline_content_destroy(Request $request ,$id)
{
    $our_deadline_content_destroy= deadlinecontent::find($id);

    if (File::exists('assets/img/uploaded/'.$our_deadline_content_destroy->image)) {
        File::delete('assets/img/uploaded/'.$our_deadline_content_destroy->image);

        $our_deadline_content_destroy->delete();
    }
    $success = [
        'message' => 'Our Deadline Content Deleted Successfully',
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
}
