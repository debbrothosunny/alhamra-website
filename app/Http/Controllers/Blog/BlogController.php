<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Auth;
use App\Models\blogpageheader;
use App\Models\blogmain;
use App\Models\blogcontent;
use App\Models\blogcomment;

class BlogController extends Controller
{
    // -----------------Blog Header Start--------------------------------------

    public function blog_header(){
    $blog_header = blogpageheader::OrderBy('id','DESC')->get();
    return view('backend.blogpage.blog_header',compact('blog_header'));
}
//Blog Header Create

public function blog_header_create(Request $request)
{
    $request->validate([
        'title'=>'required',
        'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $blog_header_create= new blogpageheader;
    $blog_header_create -> title=$request->title;

    if($request->file('bg_image')){

        $file= $request->file('bg_image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $blog_header_create['bg_image']= $filename;
    }

    $blog_header_create->save();

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

// Blog Header edit

public function blog_header_update(Request $request , $id)
{
    $request->validate([
        'title'=>'nullable',
        'bg_image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $blog_header= blogpageheader::find($id);
    $blog_header-> title=$request->title;

    if($request->file('bg_image')){

        if (File::exists('assets/img/uploaded/'.$blog_header->bg_image)) {
            File::delete('assets/img/uploaded/'.$blog_header->bg_image);
                 }
        $file= $request->file('bg_image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $blog_header['bg_image']= $filename;
    }

    $blog_header->save();

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

// Blog Header Delete

public function blog_header_destroy(Request $request ,$id)
{
    $blog_header_destroy= blogpageheader::find($id);

    if (File::exists('assets/img/uploaded/'.$blog_header_destroy->bg_image)) {
        File::delete('assets/img/uploaded/'.$blog_header_destroy->bg_image);

        $blog_header_destroy->delete();
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

// ----------------------------Blog Header End-------------------------------

// ----------------------------Blog Main Start-------------------------------


public function blog_main(){
    $blog_main = blogmain::OrderBy('id','DESC')->get();
    return view('backend.blogpage.blogmain.blog_main',compact('blog_main'));
}
//Blog Main Create

public function blog_main_create(Request $request)
{
    $request->validate([
        'category_name'=>'nullable',
        'slug'=>'nullable',
        'status'=>'nullable',
        'meta_title'=>'nullable',
        'meta_description'=>'nullable',
        'meta_keyword'=>'nullable',
        
    ]);

    $blog_main_create= new blogmain;
    $blog_main_create -> category_name=$request->category_name;
    $blog_main_create -> slug=\Str::slug($request->category_name);
    $blog_main_create -> created_by=Auth::user()->id;
    $blog_main_create -> status=$request->status == true ? '0':'1';
    $blog_main_create -> meta_title=$request->meta_title;
    $blog_main_create -> meta_description=$request->meta_description;
    $blog_main_create -> meta_keyword=$request->meta_keyword;


    $blog_main_create->save();

    $success = [
        'message' => 'Successfully! Blog Main Create',
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

// Blog Main edit

public function blog_main_update(Request $request , $id)
{
    $request->validate([
        'category_name'=>'nullable',
        'slug'=>'nullable',
        'status'=>'nullable',
        'meta_title'=>'nullable',
        'meta_description'=>'nullable',
        'meta_keyword'=>'nullable',
    ]);

    $blog_main= blogmain::find($id);

    $blog_main -> category_name=$request->category_name;
    $blog_main -> slug=\Str::slug($request->slug);
    $blog_main -> created_by=Auth::user()->id;
    $blog_main -> status=$request->status == true ? '0':'1';
    $blog_main -> meta_title=$request->meta_title;
    $blog_main -> meta_description=$request->meta_description;
    $blog_main -> meta_keyword=$request->meta_keyword;

    $blog_main->save();

    $success = [
        'message' => 'Blog Main Edited Successfully',
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

// Blog Main Delete

public function blog_main_destroy(Request $request ,$id)
{
    $blog_main_destroy= blogmain::find($id);

    if (File::exists('assets/img/uploaded/'.$blog_main_destroy->bg_image)) {
        File::delete('assets/img/uploaded/'.$blog_main_destroy->bg_image);

        $blog_main_destroy->delete();
    }
    $success = [
        'message' => 'Blog Main Deleted Successfully',
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
// -----------------------Blog Main End-----------------------------

// -----------------------Blog Content Start-----------------------------


public function blog_content(){
    $blog_content = blogcontent::OrderBy('id','DESC')->get();
    $blog_category = blogmain::get();
    return view('backend.blogpage.blogcontent.blog_content',compact('blog_content','blog_category'));
}
//Blog Content Create

public function blog_content_create(Request $request)
{
    $request->validate([
        'category_id'=>'nullable',
        'title'=>'nullable',
        'description_1'=>'nullable',
        'description_2'=>'nullable',
        'description_3'=>'nullable',
        'description_4'=>'nullable',
        'status'=>'nullable',
        'slug'=>'nullable',
        'meta_title'=>'nullable',
        'meta_description'=>'nullable',
        'meta_keyword'=>'nullable',
        
    ]);

    $blog_content_create= new blogcontent;

    $blog_content_create -> category_id=$request->category_id;
    $blog_content_create -> created_by=Auth::user()->id;
    $blog_content_create -> title=$request->title;
    $blog_content_create -> description_1=$request->description_1;
    $blog_content_create -> description_2=$request->description_2;
    $blog_content_create -> description_3=$request->description_3;
    $blog_content_create -> description_3=$request->description_3;
    $blog_content_create -> description_4=$request->description_4;
    $blog_content_create -> status=$request->status == true ? '0':'1';
    $blog_content_create -> slug=\Str::slug($request->title);
    $blog_content_create -> meta_title=$request->meta_title;
    $blog_content_create -> meta_description=$request->meta_description;
    $blog_content_create -> meta_keyword=$request->meta_keyword;


    if($request->file('image')){

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $blog_content_create['image']= $filename;
    }


    $blog_content_create->save();

    $success = [
        'message' => 'Successfully! Blog Content Create',
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

// Blog Content edit

public function blog_content_update(Request $request , $id)
{
    $request->validate([
        'category_id'=>'nullable',
        'title'=>'nullable',
        'description_1'=>'nullable',
        'description_2'=>'nullable',
        'description_3'=>'nullable',
        'description_4'=>'nullable',
        'status'=>'nullable',
        'slug'=>'nullable',
        'meta_title'=>'nullable',
        'meta_description'=>'nullable',
        'meta_keyword'=>'nullable',
    ]);

    $blog_content= blogcontent::find($id);

    $blog_content -> category_id=$request->category_id;
    $blog_content -> created_by=Auth::user()->id;
    $blog_content -> title=$request->title;
    $blog_content -> description_1=$request->description_1;
    $blog_content -> description_2=$request->description_2;
    $blog_content -> description_3=$request->description_3;
    $blog_content -> description_3=$request->description_3;
    $blog_content -> description_4=$request->description_4;
    $blog_content -> status=$request->status == true ? '0':'1';
    $blog_content -> slug=\Str::slug($request->slug);
    $blog_content -> meta_title=$request->meta_title;
    $blog_content -> meta_description=$request->meta_description;
    $blog_content -> meta_keyword=$request->meta_keyword;

    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$blog_content->image)) {
            File::delete('assets/img/uploaded/'.$blog_content->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $blog_content['image']= $filename;
    }
    $blog_content->save();

    $success = [
        'message' => 'Blog Content Edited Successfully',
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

// Blog Content Delete

public function blog_content_destroy(Request $request ,$id)
{
    $blog_content_destroy= blogcontent::find($id);

    if (File::exists('assets/img/uploaded/'.$blog_content_destroy->image)) {
        File::delete('assets/img/uploaded/'.$blog_content_destroy->image);

        $blog_content_destroy->delete();
    }
    $success = [
        'message' => 'Blog Content Deleted Successfully',
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
// ------------------------------Blog Content End------------------------------------


// ------------------------------Blog Comment Start------------------------------------


    public function blog_comment(){
        $blog_comment = blogcomment::OrderBy('id','DESC')->get();
        return view('backend.blogpage.blog_comment_section.blog_comment',compact('blog_comment'));
    }
    //Header Create
    public function blog_comment_create(Request $request)
    {
        $request->validate([
            'comment'=>'required',
            'name'=>'required',
            'email'=>'required',
           
        ]);

        $blog_comment_create= new blogcomment;
        $blog_comment_create -> comment=$request->comment;
        $blog_comment_create -> name=$request->name;
        $blog_comment_create -> email=$request->email;

        $blog_comment_create->save();

        $success = [
            'message' => 'Successfully! Blog Comment Create',
            'alert-type' => 'success'
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

    // Header Delete
    public function blog_comment_destroy(Request $request ,$id)
    {
        $blog_comment_destroy= blogcomment::find($id);

        if (File::exists('assets/img/uploaded/'.$blog_comment_destroy->image)) {
            File::delete('assets/img/uploaded/'.$blog_comment_destroy->image);

            $blog_comment_destroy->delete();
        }
        $success = [
            'message' => 'Blog Comment Deleted Successfully',
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
