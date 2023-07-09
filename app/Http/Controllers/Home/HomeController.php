<?php

namespace App\Http\Controllers\Home;
use File;
use App\Models\header;
use App\Models\about;
use App\Models\ouractivitiestitle;
use App\Models\ouractivitiescontent;
use App\Models\ourgallerytitle;
use App\Models\ourgalleryimage;
use App\Models\besthoteltitle;
use App\Models\besthotelimage;
use App\Models\buffetparadisetitle;
use App\Models\buffetparadiseimage;
use App\Models\blogheader;
use App\Models\contactsectionimage;
use App\Models\contactmessage;
use App\Models\sitesetting;
use App\Models\footer;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ----------------Header Section Start -------------------

    public function header(){
        $header = header::OrderBy('id','DESC')->get();
        return view('backend.home.header.header',compact('header'));
    }
    //Header Create
    public function header_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'button1'=>'required',
            'button2'=>'required',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $header_create= new header;
        $header_create -> title=$request->title;
        $header_create -> button1=$request->button1;
        $header_create -> button2=$request->button2;

        if($request->file('bg_image')){

            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $header_create['bg_image']= $filename;
        }

        $header_create->save();

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

    // header edit
    public function header_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'required',
            'button1'=>'required',
            'button2'=>'required',
            'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $header= header::find($id);
        $header-> title=$request->title;
        $header-> button1=$request->button1;
        $header-> button2=$request->button2;

        if($request->file('bg_image')){

            if (File::exists('assets/img/uploaded/'.$header->bg_image)) {
                File::delete('assets/img/uploaded/'.$header->bg_image);
                     }
            $file= $request->file('bg_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $header['bg_image']= $filename;
        }

        $header->save();
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

    // Header Delete
    public function header_destroy(Request $request ,$id)
    {
        $header_destroy= header::find($id);

        if (File::exists('assets/img/uploaded/'.$header_destroy->bg_image)) {
            File::delete('assets/img/uploaded/'.$header_destroy->bg_image);

            $header_destroy->delete();
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
    // ----------------Header Section End -------------------





    // ----------------About Section Start -------------------

    public function about(){
        $about = about::OrderBy('id','DESC')->get();
        return view('backend.home.about.about',compact('about'));
    }


    //About Create
    public function about_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'button'=>'required',
            'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $about_create= new about;
        $about_create -> title=$request->title;
        $about_create -> description=$request->description;
        $about_create -> button=$request->button;

        if($request->file('image')){

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $about_create['image']= $filename;
        }

        $about_create->save();

        $success = [
            'message' => 'Successfully! About Create',
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




    // About Edit
    public function about_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'button'=>'required',
            'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $about= about::find($id);
        $about -> title=$request->title;
        $about -> description=$request->description;
        $about -> button=$request->button;

        if($request->file('image')){

            if (File::exists('assets/img/uploaded/'.$about->image)) {
                File::delete('assets/img/uploaded/'.$about->image);
                     }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $about['image']= $filename;
        }

        $about->save();
        $success = [
            'message' => 'About Edited Successfully',
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


    // About Delete
    public function about_destroy(Request $request ,$id)
    {
        $about= about::find($id);

        if (File::exists('assets/img/uploaded/'.$about->image)) {
            File::delete('assets/img/uploaded/'.$about->image);

            $about->delete();
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
    // ----------------About Section End -------------------

    // Our Activities Title Start

    
    public function our_activities_title(){
        $our_activities_title = ouractivitiestitle::OrderBy('id','DESC')->get();
        return view('backend.home.our_activities_title.our_activities_title',compact('our_activities_title'));
    }


    //About Create
    public function our_activities_title_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);

        $our_activities_title_create= new ouractivitiestitle;
        $our_activities_title_create -> title=$request->title;

        $our_activities_title_create->save();

        $success = [
            'message' => 'Successfully! About Create',
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


    // Our Activities Title Edit
    public function our_activities_title_update(Request $request , $id)
    {
        $request->validate([
            'title'=>'required',
        ]);

        $our_activities_title_update= ouractivitiestitle::find($id);
        $our_activities_title_update -> title=$request->title;


        $our_activities_title_update->save();
        $success = [
            'message' => 'Our Activities Title Edited Successfully',
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


    // Our Activities Title Delete
    public function our_activities_title_destroy(Request $request ,$id)
    {
        $our_activities_title_destroy= ouractivitiestitle::find($id);

        if (File::exists('assets/img/uploaded/'.$our_activities_title_destroy->image)) {
            File::delete('assets/img/uploaded/'.$our_activities_title_destroy->image);

            $our_activities_title_destroy->delete();
        }
        $success = [
            'message' => 'Our Activities Title Deleted Successfully',
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


// -------------------Our Activities Title End------------------

// -------------------Our Activities Content Start------------------

 // Our Activities Title Start

    
 public function our_activities_content(){
    $our_activities_content = ouractivitiescontent::OrderBy('id','DESC')->get();
    return view('backend.home.our_activities_content.our_activities_content',compact('our_activities_content'));
}


//Our Activities Content Create

public function our_activities_content_create(Request $request)
{
    $request->validate([
        'name'=>'required',
        'icon'=>'required',
    ]);

    $our_activities_content_create= new ouractivitiescontent;
    $our_activities_content_create -> name=$request->name;
    $our_activities_content_create -> icon=$request->icon;

    $our_activities_content_create->save();

    $success = [
        'message' => 'Successfully! About Create',
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


// Our Activities Content Edit
public function our_activities_content_update(Request $request , $id)
{
    $request->validate([
        'name'=>'nullable',
        'icon'=>'nullable',
    ]);

    $our_activities_content_update= ouractivitiescontent::find($id);
    $our_activities_content_update -> name=$request->name;
    $our_activities_content_update -> icon=$request->icon;


    $our_activities_content_update->save();
    $success = [
        'message' => 'Our Activities Content Edited Successfully',
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



    // Our Activities Content Delete
    public function our_activities_content_destroy(Request $request ,$id)
    {
        $our_activities_content_destroy= ouractivitiescontent::find($id);

        if (File::exists('assets/img/uploaded/'.$our_activities_content_destroy->image)) {
            File::delete('assets/img/uploaded/'.$our_activities_content_destroy->image);

            $our_activities_content_destroy->delete();
        }
        $success = [
            'message' => 'Our Activities Content Deleted Successfully',
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


    // -------------------Our Activities Content End----------------------

    // -------------------Our Gallery Title Start-------------------------

      
    public function our_gallery_title(){
        $our_gallery_title = ourgallerytitle::OrderBy('id','DESC')->get();
        return view('backend.home.our_gallery_title.our_gallery_title',compact('our_gallery_title'));
    }


    //About Create
    public function our_gallery_title_create(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);

        $our_gallery_title_create= new ourgallerytitle;
        $our_gallery_title_create -> title=$request->title;

        $our_gallery_title_create->save();

        $success = [
            'message' => 'Successfully! About Create',
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


    // Our Gallery  Title Edit

public function our_gallery_title_update(Request $request , $id)
{
    $request->validate([
        'title'=>'nullable',
    ]);

    $our_gallery_title_update= ourgallerytitle::find($id);
    $our_gallery_title_update -> title=$request->title;



    $our_gallery_title_update->save();
    $success = [
        'message' => 'Our Gallery Title Edited Successfully',
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

    // Our Gallery title Delete

    public function our_gallery_title_destroy(Request $request ,$id)
    {
        $our_gallery_title_destroy= ourgallerytitle::find($id);

        if (File::exists('assets/img/uploaded/'.$our_gallery_title_destroy->image)) {
            File::delete('assets/img/uploaded/'.$our_gallery_title_destroy->image);

            $our_gallery_title_destroy->delete();
        }
        $success = [
            'message' => 'Our Gallery Title Deleted Successfully',
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

    // -----------------Our Gallery Title End-------------------------

    // -----------------Our Gallery Image Start-------------------------

    public function our_gallery_image(){
        $our_gallery_image = ourgalleryimage::OrderBy('id','DESC')->get();
        return view('backend.home.our_gallery_image.our_gallery_image',compact('our_gallery_image'));
    }


    //Gallery Image Create

    public function our_gallery_image_create(Request $request)
    {
        $request->validate([
            'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        ]);

        $our_gallery_image_create= new ourgalleryimage;

        if($request->file('image')){

            if (File::exists('assets/img/uploaded/'.$our_gallery_image_create->image)) {
                File::delete('assets/img/uploaded/'.$our_gallery_image_create->image);
                     }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(('assets/img/uploaded'), $filename);
            $our_gallery_image_create['image']= $filename;
        }

        $our_gallery_image_create->save();

        $success = [
            'message' => 'Successfully! About Create',
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


    
    // Our Gallery Image Edit

public function our_gallery_image_update(Request $request , $id)
{
    $request->validate([
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $our_gallery_image= ourgalleryimage::find($id);
    
    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$our_gallery_image->image)) {
            File::delete('assets/img/uploaded/'.$our_gallery_image->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $our_gallery_image['image']= $filename;
    }


    $our_gallery_image->save();
    $success = [
        'message' => 'Our Gallery Image Edited Successfully',
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

 // Our Gallery Image Delete

 public function our_gallery_image_destroy(Request $request ,$id)
 {
     $our_gallery_image_destroy= ourgalleryimage::find($id);

     if (File::exists('assets/img/uploaded/'.$our_gallery_image_destroy->image)) {
         File::delete('assets/img/uploaded/'.$our_gallery_image_destroy->image);

         $our_gallery_image_destroy->delete();
     }
     $success = [
         'message' => 'Our Gallery Title Deleted Successfully',
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
// ------------Our Gallery Image End-------------------------

// ------------Best Hotels Title Start-------------------------

public function best_hotels_title(){
    $best_hotels_title = besthoteltitle::OrderBy('id','DESC')->get();
    return view('backend.home.best_hotels_title.best_hotels_title',compact('best_hotels_title'));
}


//Best Hotels Title Create

public function best_hotels_title_create(Request $request)
{
    $request->validate([
        'title'=>'required',
    ]);

    $best_hotels_title_create= new besthoteltitle;
    $best_hotels_title_create -> title=$request->title;  

    $best_hotels_title_create->save();

    $success = [
        'message' => 'Successfully! About Create',
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

 // Best Hotels Title Edit
 public function best_hotels_title_update(Request $request , $id)
 {
     $request->validate([
         'title'=>'required',
     ]);

     $best_hotels_title= besthoteltitle::find($id);
     $best_hotels_title -> title=$request->title;


     $best_hotels_title->save();
     $success = [
         'message' => 'Best Hotels Title Edited Successfully',
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


 // Best Hotels Title Delete
 public function best_hotels_title_destroy(Request $request ,$id)
 {
     $best_hotels_title_destroy= besthoteltitle::find($id);

     if (File::exists('assets/img/uploaded/'.$best_hotels_title_destroy->image)) {
         File::delete('assets/img/uploaded/'.$best_hotels_title_destroy->image);

         $best_hotels_title_destroy->delete();
     }
     $success = [
         'message' => 'Best Hotels Title Deleted Successfully',
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

//-------------------------------- Best Hotels Title End-------------------
   
// -----------------Best Hotels Image Start-------------------------

public function best_hotels_image(){
    $best_hotels_image = besthotelimage::OrderBy('id','DESC')->get();
    return view('backend.home.best_hotels_image.best_hotels_image',compact('best_hotels_image'));
}


//Best Hotels Image Create

public function best_hotels_image_create(Request $request)
{
    $request->validate([
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $best_hotels_image_create= new besthotelimage;

    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$best_hotels_image_create->image)) {
            File::delete('assets/img/uploaded/'.$best_hotels_image_create->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $best_hotels_image_create['image']= $filename;
    }

    $best_hotels_image_create->save();

    $success = [
        'message' => 'Successfully! About Create',
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

// Best Hotels Image Edit

public function best_hotels_image_update(Request $request , $id)
{
    $request->validate([
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $best_hotels_image= besthotelimage::find($id);
    
    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$best_hotels_image->image)) {
            File::delete('assets/img/uploaded/'.$best_hotels_image->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $best_hotels_image['image']= $filename;
    }


    $best_hotels_image->save();
    $success = [
        'message' => 'Our Gallery Image Edited Successfully',
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

// Best Hotels Image Delete

 public function best_hotels_image_destroy(Request $request ,$id)
 {
     $best_hotels_image_destroy= besthotelimage::find($id);

     if (File::exists('assets/img/uploaded/'.$best_hotels_image_destroy->image)) {
         File::delete('assets/img/uploaded/'.$best_hotels_image_destroy->image);

         $best_hotels_image_destroy->delete();
     }
     $success = [
         'message' => 'Best Hotels Image Deleted Successfully',
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

 // ----------------Best Hotels Image End--------------------

 // ----------------Buffet Paradise Title Start--------------

 
 public function buffet_paradise_title(){
    $buffet_paradise_title = buffetparadisetitle::OrderBy('id','DESC')->get();
    return view('backend.home.buffet_paradise_title.buffet_paradise_title',compact('buffet_paradise_title'));
}

 //Buffet paradise Title Create

public function buffet_paradise_title_create(Request $request)
{
    $request->validate([
        'title'=>'required',
    ]);

    $buffet_paradise_title_create= new buffetparadisetitle;
    $buffet_paradise_title_create -> title=$request->title;

    $buffet_paradise_title_create->save();

    $success = [
        'message' => 'Successfully! About Create',
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


// Buffet paradise Title Edit
public function buffet_paradise_title_update(Request $request , $id)
{
    $request->validate([
        'title'=>'required',
    ]);

    $buffet_paradise_title= buffetparadisetitle::find($id);
    $buffet_paradise_title -> title=$request->title;


    $buffet_paradise_title->save();
    $success = [
        'message' => 'Buffet paradise Title Edited Successfully',
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


// Buffet paradise Title Delete
public function buffet_paradise_title_destroy(Request $request ,$id)
{
    $our_activities_title_destroy= buffetparadisetitle::find($id);

    if (File::exists('assets/img/uploaded/'.$buffet_paradise_title->image)) {
        File::delete('assets/img/uploaded/'.$buffet_paradise_title->image);

        $buffet_paradise_title->delete();
    }
    $success = [
        'message' => 'Buffet paradise Title Deleted Successfully',
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


// ----------------------Buffet paradise Title end--------------------------

// ----------------------Buffet paradise Image start--------------------------

public function buffet_paradise_image(){
    $buffet_paradise_image = buffetparadiseimage::OrderBy('id','DESC')->get();
    return view('backend.home.buffet_paradise_image.buffet_paradise_image',compact('buffet_paradise_image'));
}


//Buffet paradise Image Create

public function buffet_paradise_image_create(Request $request)
{
    $request->validate([
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $buffet_paradise_image_create= new buffetparadiseimage;

    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$buffet_paradise_image_create->image)) {
            File::delete('assets/img/uploaded/'.$buffet_paradise_image_create->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $buffet_paradise_image_create['image']= $filename;
    }

    $buffet_paradise_image_create->save();

    $success = [
        'message' => 'Successfully! About Create',
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



// Buffet paradise Image Edit

public function buffet_paradise_image_update(Request $request , $id)
{
$request->validate([
    'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
]);

$buffet_paradise_image= buffetparadiseimage::find($id);

if($request->file('image')){

    if (File::exists('assets/img/uploaded/'.$buffet_paradise_image->image)) {
        File::delete('assets/img/uploaded/'.$buffet_paradise_image->image);
             }
    $file= $request->file('image');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(('assets/img/uploaded'), $filename);
    $buffet_paradise_image['image']= $filename;
}


$buffet_paradise_image->save();
$success = [
    'message' => 'Buffet paradise Image Edited Successfully',
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

// Buffet paradise Image Delete

public function buffet_paradise_image_destroy(Request $request ,$id)
{
 $buffet_paradise_image_destroy= buffetparadiseimage::find($id);

 if (File::exists('assets/img/uploaded/'.$buffet_paradise_image_destroy->image)) {
     File::delete('assets/img/uploaded/'.$buffet_paradise_image_destroy->image);

     $buffet_paradise_image_destroy->delete();
 }
 $success = [
     'message' => 'Buffet paradise Image Deleted Successfully',
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

// ----------------------buffet_paradise_image end--------------------------


// ----------------------Blog Title Create--------------------------

public function  blog_title(){
    $blog_title = blogheader::OrderBy('id','DESC')->get();
    return view('backend.home.blog_title.blog_title',compact('blog_title'));
}

 //Blog Title Create

public function blog_title_create(Request $request)
{
    $request->validate([
        'title'=>'required',
    ]);

    $blog_title_create= new blogheader;
    $blog_title_create -> title=$request->title;

    $blog_title_create->save();

    $success = [
        'message' => 'Successfully! Blog title Create',
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


// blog Title Edit
 
public function blog_title_update(Request $request , $id)
{
    $request->validate([
        'title'=>'required',
    ]);

    $blog_title= blogheader::find($id);
    $blog_title -> title=$request->title;


    $blog_title->save();
    $success = [
        'message' => 'Blog Title Edited Successfully',
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

// blog Title Delete

public function blog_title_destroy(Request $request ,$id)
{
    $blog_title_destroy= blogheader::find($id);

    if (File::exists('assets/img/uploaded/'.$blog_title_destroy->image)) {
        File::delete('assets/img/uploaded/'.$blog_title_destroy->image);

        $blog_title_destroy->delete();
    }
    $success = [
        'message' => 'Buffet paradise Title Deleted Successfully',
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

// -----------------------blog_title_End--------------------------------------------

// ----------------------contact section Image start--------------------------
 
public function contact_section_image(){
    $contact_section_image = contactsectionimage::OrderBy('id','DESC')->get();
    return view('backend.home.contact_section_image.contact_section_image',compact('contact_section_image'));
}


//Contact Section Image Create

public function contact_section_image_create(Request $request)
{
    $request->validate([
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
        'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $contact_section_image_create= new contactsectionimage;

    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$contact_section_image_create->image)) {
            File::delete('assets/img/uploaded/'.$contact_section_image_create->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $contact_section_image_create['image']= $filename;
    }

    if($request->file('bg_image')){

        if (File::exists('assets/img/uploaded/'.$contact_section_image_create->bg_image)) {
            File::delete('assets/img/uploaded/'.$contact_section_image_create->bg_image);
                 }
        $file= $request->file('bg_image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $contact_section_image_create['bg_image']= $filename;
    }

    $contact_section_image_create->save();

    $success = [
        'message' => 'Successfully! About Create',
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



// Contact Section Image Edit

public function contact_section_image_update(Request $request , $id)
{
$request->validate([
    'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
]);

$contact_section_image= contactsectionimage::find($id);

if($request->file('image')){

    if (File::exists('assets/img/uploaded/'.$contact_section_image->image)) {
        File::delete('assets/img/uploaded/'.$contact_section_image->image);
             }
    $file= $request->file('image');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(('assets/img/uploaded'), $filename);
    $contact_section_image['image']= $filename;
}


if($request->file('bg_image')){

    if (File::exists('assets/img/uploaded/'.$contact_section_image->bg_image)) {
        File::delete('assets/img/uploaded/'.$contact_section_image->bg_image);
             }
    $file= $request->file('bg_image');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(('assets/img/uploaded'), $filename);
    $contact_section_image['bg_image']= $filename;
}


$contact_section_image->save();
$success = [
    'message' => 'Buffet paradise Image Edited Successfully',
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

// Contact Section Image Delete

public function contact_section_image_destroy(Request $request ,$id)
{
 $contact_section_image_destroy= contactsectionimage::find($id);

 if (File::exists('assets/img/uploaded/'.$contact_section_image_destroy->image)) {
     File::delete('assets/img/uploaded/'.$contact_section_image_destroy->bg_image);

     $contact_section_image_destroy->delete();
 }
 $success = [
     'message' => 'Buffet paradise Image Deleted Successfully',
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
// ----------------Contact Section Image End------------------------


// ----------------Contact Section message start------------------------

public function contact_message(){
    $contact_message = contactmessage::OrderBy('id','DESC')->get();
    return view('backend.home.contact_message.contact_message',compact('contact_message'));
}


    //Contact Section Message Create

    public function contact_message_create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'comment'=>'required',
        
        ]);

        $contact_message_create= new contactmessage;

        $contact_message_create -> name=$request->name;
        $contact_message_create -> email=$request->email;
        $contact_message_create -> subject=$request->subject;
        $contact_message_create -> comment=$request->comment;

        $contact_message_create->save();

        $success = [
            'message' => 'Successfully! Message Send',
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

 //Contact Section Message Delete

 public function contact_message_destroy(Request $request ,$id)
 {
     $contact_message_destroy= contactmessage::find($id);

     if (File::exists('assets/img/uploaded/'.$contact_message_destroy->image)) {
         File::delete('assets/img/uploaded/'.$contact_message_destroy->image);

         $contact_message_destroy->delete();
     }
     $success = [
         'message' => 'Message Send Deleted Successfully',
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


// ----------------Site Setting Start------------------------



public function site_setting(){
    $site_setting = sitesetting::OrderBy('id','DESC')->get();
    return view('backend.home.site_setting.site_setting',compact('site_setting'));
}


//Site Setting  Create

public function site_setting_create(Request $request)
{
    $request->validate([
        'copyright'=>'nullable',
        'button'=>'nullable',
        'logo'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $site_setting_create= new sitesetting;

    $site_setting_create -> copyright=$request->copyright;
    $site_setting_create -> button=$request->button;

    if($request->file('logo')){

        if (File::exists('assets/img/uploaded/'.$site_setting_create->logo)) {
            File::delete('assets/img/uploaded/'.$site_setting_create->logo);
                 }
        $file= $request->file('logo');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $site_setting_create['logo']= $filename;
    }

    $site_setting_create->save();

    $success = [
        'message' => 'Successfully! About Create',
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



// Site Setting  Edit
 
public function site_setting_update(Request $request , $id)
{
$request->validate([
    'copyright'=>'nullable',
    'button'=>'nullable',
    'logo'=>'mimes:png,jpg,jpeg|nullable|max:500',
]);

$site_setting= sitesetting::find($id);

$site_setting -> copyright=$request->copyright;
$site_setting -> button=$request->button;

if($request->file('logo')){

    if (File::exists('assets/img/uploaded/'.$site_setting->logo)) {
        File::delete('assets/img/uploaded/'.$site_setting->logo);
    }
    $file= $request->file('logo');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(('assets/img/uploaded'), $filename);
    $site_setting['logo']= $filename;
}


$site_setting->save();
$success = [
    'message' => 'Site Setting Edited Successfully',
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

// Site Setting  Delete

public function site_setting_destroy(Request $request ,$id)
{
 $site_setting_destroy= sitesetting::find($id);

 if (File::exists('assets/img/uploaded/'.$site_setting_destroy->logo)) {
     File::delete('assets/img/uploaded/'.$site_setting_destroy->logo);

     $site_setting_destroy->delete();
 }
 $success = [
     'message' => 'Buffet paradise Image Deleted Successfully',
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
// -----------------Site Setting End-----------------------------

// -------------------Our Activities Content Start------------------

public function footer(){
$footer = footer::OrderBy('id','DESC')->get();
return view('backend.home.footer_section.footer_section',compact('footer'));
}


//Footer Create

public function footer_create(Request $request)
{
$request->validate([
    'title_1'=>'required',
    'description_1'=>'required',
    'title_2'=>'required',
    'title_3'=>'required',
    'description_2'=>'required',
    'location'=>'required',
    'number_1'=>'required',
    'number_2'=>'required',
    'email'=>'required',
    'location_icon'=>'required',
    'phone_icon_1'=>'required',
    'phone_icon_2'=>'required',
    'email_icon'=>'required',
    'facebook'=>'required',
    'twitter'=>'required',
    'linkdin'=>'required',
]);

$footer_create= new footer;
$footer_create -> title_1=$request->title_1;
$footer_create -> description_1=$request->description_1;
$footer_create -> title_2=$request->title_2;
$footer_create -> title_3=$request->title_3;
$footer_create -> description_2=$request->description_2;
$footer_create -> location=$request->location;
$footer_create -> number_1=$request->number_1;
$footer_create -> number_2=$request->number_2;
$footer_create-> email=$request->email;
$footer_create -> location_icon=$request->location_icon;
$footer_create -> phone_icon_1=$request->phone_icon_1;
$footer_create -> phone_icon_2=$request->phone_icon_2;
$footer_create -> email_icon=$request->email_icon;
$footer_create -> facebook=$request->facebook;
$footer_create -> twitter=$request->twitter;
$footer_create -> linkdin=$request->linkdin;


$footer_create->save();

$success = [
    'message' => 'Successfully! About Create',
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


// Footer Edit

public function footer_update(Request $request , $id)
{
$request->validate([
    'title_1'=>'nullable',
    'description_1'=>'nullable',
    'title_2'=>'nullable',
    'title_3'=>'nullable',
    'description_2'=>'nullable',
    'location'=>'nullable',
    'number_1'=>'nullable',
    'number_2'=>'nullable',
    'email'=>'nullable',
    'location_icon'=>'nullable',
    'phone_icon_1'=>'nullable',
    'phone_icon_2'=>'nullable',
    'email_icon'=>'nullable',
    'facebook'=>'nullable',
    'twitter'=>'nullable',
    'linkdin'=>'nullable',
]);

$footer= footer::find($id);
$footer-> title_1=$request->title_1;
$footer-> description_1=$request->description_1;
$footer-> title_2=$request->title_2;
$footer-> title_3=$request->title_3;
$footer-> description_2=$request->description_2;
$footer-> location=$request->location;
$footer-> number_1=$request->number_1;
$footer-> number_2=$request->number_2;
$footer-> email=$request->email;
$footer-> location_icon=$request->location_icon;
$footer-> phone_icon_1=$request->phone_icon_1;
$footer-> phone_icon_2=$request->phone_icon_2;
$footer-> email_icon=$request->email_icon;
$footer-> facebook=$request->facebook;
$footer-> twitter=$request->twitter;
$footer-> linkdin=$request->linkdin;


$footer->save();
$success = [
    'message' => 'footer Edited Successfully',
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



// Footer Delete
public function footer_destroy(Request $request ,$id)
{
    $footer_destroy= footer::find($id);

    if (File::exists('assets/img/uploaded/'.$footer_destroy->image)) {
        File::delete('assets/img/uploaded/'.$footer_destroy->image);

        $footer_destroy->delete();
    }
    $success = [
        'message' => 'footer Deleted Successfully',
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
