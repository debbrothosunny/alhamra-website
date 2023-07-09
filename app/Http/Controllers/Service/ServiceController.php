<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Models\serviceheader;
use App\Models\servicesecond;
use App\Models\whatwedotitle;
use App\Models\whatwedocontent;
use App\Models\trustedtitle;
use App\Models\trustedslider;


class ServiceController extends Controller
{
    // ----------------Service Header Section Start -------------------

    public function service_header(){
        $service_header = serviceheader::OrderBy('id','DESC')->get();
        return view('backend.servicepage.service_header',compact('service_header'));
    }
    //Service Header Section Create
    public function service_header_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $service_header_create= new serviceheader;
        $service_header_create -> title=$request->title;

        if($request->file('bg_image')){

            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $service_header_create['bg_image']= $filename;
        }

        $service_header_create->save();

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

    // Service Header Section edit
    public function service_header_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $service_header= serviceheader::find($id);
        $service_header-> title=$request->title;

        if($request->file('bg_image')){

            if (File::exists('assets/img/uploaded/'.$service_header->bg_image)) {
                File::delete('assets/img/uploaded/'.$service_header->bg_image);
                     }
            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $service_header['bg_image']= $filename;
        }

        $service_header->save();

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

    // Service Header Section Delete
    public function service_header_destroy(Request $request ,$id)
    {
        $service_header_destroy= serviceheader::find($id);

        if (File::exists('assets/img/uploaded/'.$service_header_destroy->bg_image)) {
            File::delete('assets/img/uploaded/'.$service_header_destroy->bg_image);

            $service_header_destroy->delete();
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


    // -----------------Service Header Section End------------------------------

    // -----------------Service Second Section Start-----------------------------
    
     public function second_section(){
        $second_section = servicesecond::OrderBy('id','DESC')->get();
        return view('backend.servicepage.second_section.second_section',compact('second_section'));
    }
    //Service Second Section Create
    public function second_section_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'button'=>'required',
            'icon'=>'required',
        ]);

        $second_section_create= new servicesecond;
        $second_section_create -> title=$request->title;
        $second_section_create -> description=$request->description;
        $second_section_create -> button=$request->button;
        $second_section_create -> icon=$request->icon;


        $second_section_create->save();

        $success = [
            'message' => 'Successfully! Second Section Create',
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

    // Service Second Section edit
    public function second_section_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'description'=>'nullable',
            'button'=>'nullable',
            'icon'=>'nullable',
        ]);

        $second_section= servicesecond::find($id);

        $second_section -> title=$request->title;
        $second_section -> description=$request->description;
        $second_section -> button=$request->button;
        $second_section -> icon=$request->icon;

        $second_section->save();

        $success = [
            'message' => 'Second Section Edited Successfully',
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



    //Service Second Section Delete
    public function second_section_destroy(Request $request ,$id)
    {
        $second_section_destroy= servicesecond::find($id);

        if (File::exists('assets/img/uploaded/'.$second_section_destroy->image)) {
            File::delete('assets/img/uploaded/'.$second_section_destroy->image);

            $second_section_destroy->delete();
        }
        $success = [
            'message' => 'Second Section Deleted Successfully',
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


     //-------------------Service Second Section End--------------------

     //-------------------What We Do Title  Start--------------------

     
     public function what_we_do(){
        $what_we_do = whatwedotitle::OrderBy('id','DESC')->get();
        return view('backend.servicepage.what_we_do.what_we_do',compact('what_we_do'));
    }
    //What We Do Title Create
    public function what_we_do_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'bg_img'=>'mimes:png,jpg,jpeg|nullable|max:500',
            
        ]);

        $what_we_do_create= new whatwedotitle;

        $what_we_do_create -> title=$request->title;
        $what_we_do_create -> subtitle=$request->subtitle;

        
        if($request->file('bg_img')){

            $file= $request->file('bg_img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $what_we_do_create['bg_img']= $filename;
        }


        $what_we_do_create->save();

        $success = [
            'message' => 'Successfully! What We Do Title Create',
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

    // What We Do Title edit
    public function what_we_do_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'subtitle'=>'nullable',
            'bg_img'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $what_we_do= whatwedotitle::find($id);

        $what_we_do -> title=$request->title;
        $what_we_do -> subtitle=$request->subtitle;

        if($request->file('bg_img')){

            if (File::exists('assets/img/uploaded/'.$what_we_do->bg_img)) {
                File::delete('assets/img/uploaded/'.$what_we_do->bg_img);
                     }
            $file= $request->file('bg_img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $what_we_do['bg_image']= $filename;
        }

        $what_we_do->save();

        $success = [
            'message' => 'What We Do TitleEdited Successfully',
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

    //What We Do Title Delete
    public function what_we_do_destroy(Request $request ,$id)
    {
        $what_we_do_destroy= whatwedotitle::find($id);

        if (File::exists('assets/img/uploaded/'.$what_we_do_destroy->bg_img)) {
            File::delete('assets/img/uploaded/'.$what_we_do_destroy->bg_img);

            $what_we_do_destroy->delete();
        }
        $success = [
            'message' => 'What We Do Title Deleted Successfully',
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

  //------------------------What We Do Title Delete-----------------------------

  //------------------------what_we_do_content Start-----------------------------


    public function what_we_do_content(){
        $what_we_do_content = whatwedocontent::OrderBy('id','DESC')->get();
        return view('backend.servicepage.what_we_do.what_we_do_content.what_we_do_content',compact('what_we_do_content'));
    }
    //what_we_do_content Create

    public function what_we_do_content_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
            'description'=>'required',
            'icon'=>'required',
        ]);

        $what_we_do_content_create= new whatwedocontent;
        $what_we_do_content_create -> title=$request->title;
        $what_we_do_content_create -> sub_title=$request->sub_title;
        $what_we_do_content_create -> description=$request->description;
        $what_we_do_content_create -> icon=$request->icon;


        $what_we_do_content_create->save();

        $success = [
            'message' => 'Successfully! what_we_do_content Create',
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

    // what_we_do_content edit

    public function what_we_do_content_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'sub_title'=>'nullable',
            'description'=>'nullable',
            'icon'=>'nullable',
            
        ]);

        $what_we_do_content= whatwedocontent::find($id);
        $what_we_do_content -> title=$request->title;
        $what_we_do_content -> sub_title=$request->sub_title;
        $what_we_do_content -> description=$request->description;
        $what_we_do_content -> icon=$request->icon;

       

        $what_we_do_content->save();

        $success = [
            'message' => 'what_we_do_content Edited Successfully',
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

    // what_we_do_content Delete
    public function what_we_do_content_destroy(Request $request ,$id)
    {
        $what_we_do_content_destroy= whatwedocontent::find($id);

        if (File::exists('assets/img/uploaded/'.$what_we_do_content_destroy->bg_img)) {
            File::delete('assets/img/uploaded/'.$what_we_do_content_destroy->bg_img);

            $what_we_do_content_destroy->delete();
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


    // ----------------------------Service Header Section End------------------------------

    // ----------------------------trusted_customer_title Start------------------------------

    
    public function trusted_customer_title(){
        $trusted_customer_title = trustedtitle::OrderBy('id','DESC')->get();
        return view('backend.servicepage.trusted_customer_title.trusted_customer_title',compact('trusted_customer_title'));
    }
    //trusted_customer_title Create

    public function trusted_customer_title_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',

        ]);

        $trusted_customer_title_create= new trustedtitle;
        $trusted_customer_title_create -> title=$request->title;
        $trusted_customer_title_create -> description=$request->description;
      

        $trusted_customer_title_create->save();

        $success = [
            'message' => 'Successfully! Trusted Title Create',
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

    // trusted_customer_title edit

    public function trusted_customer_title_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'nullable',
            'description'=>'nullable',
        ]);

        $trusted_customer_title= trustedtitle::find($id);
        $trusted_customer_title -> title=$request->title;
        $trusted_customer_title -> description=$request->description;

       

        $trusted_customer_title->save();

        $success = [
            'message' => 'Trusted Title Edited Successfully',
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

    // trusted_customer_title Delete
    public function trusted_customer_title_destroy(Request $request ,$id)
    {
        $trusted_customer_title_destroy= trustedtitle::find($id);

        if (File::exists('assets/img/uploaded/'.$trusted_customer_title_destroy->bg_image)) {
            File::delete('assets/img/uploaded/'.$trusted_customer_title_destroy->bg_image);

            $trusted_customer_title_destroy->delete();
        }
        $success = [
            'message' => 'Trusted Title Deleted Successfully',
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

// ---------------------------------trusted_customer_title----------------------------

// ---------------------------------Trusted Customer Slider----------------------------

public function trusted_customer_slider(){
    $trusted_customer_slider = trustedslider::OrderBy('id','DESC')->get();
    return view('backend.servicepage.trusted_customer_title.trusted_customer_slider.trusted_customer_slider',compact('trusted_customer_slider'));
}
//Trusted Customer Slider Create

public function trusted_customer_slider_create(Request $request)
{
    $request->validate([
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $trusted_customer_slider_create= new trustedslider;

    if($request->file('image')){

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $trusted_customer_slider_create['image']= $filename;
    }

    $trusted_customer_slider_create->save();

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

// Trusted Customer Slider edit

public function trusted_customer_slider_update(Request $request , $id)
{
    $request->validate([
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $trusted_customer_slider= trustedslider::find($id);

    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$trusted_customer_slider->image)) {
            File::delete('assets/img/uploaded/'.$trusted_customer_slider->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $trusted_customer_slider['image']= $filename;
    }

    $trusted_customer_slider->save();

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

// Trusted Customer Slider Delete

public function trusted_customer_slider_destroy(Request $request ,$id)
{
    $trusted_customer_slider_destroy= trustedslider::find($id);

    if (File::exists('assets/img/uploaded/'.$trusted_customer_slider_destroy->image)) {
        File::delete('assets/img/uploaded/'.$trusted_customer_slider_destroy->image);

        $trusted_customer_slider_destroy->delete();
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

// -----------------------------Trusted Customer Slider End--------------------------------------

}
