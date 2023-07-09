<?php

namespace App\Http\Controllers\deadlinecontent;

use App\Http\Controllers\Controller;
use File;
use App\Models\contentdeadline;
use App\Models\maindeadline;
use Illuminate\Http\Request;

class deadlinecontent extends Controller
{
      
 // ----------------Our Deadline Content Start -------------------

 public function new_deadline_content(){
    $new_deadline_content = contentdeadline::OrderBy('id','DESC')->get();
    $new_deadline_date = maindeadline::OrderBy('id','DESC')->get();
    return view('backend.new_deadline_content.new_deadline_content',compact('new_deadline_content','new_deadline_date'));
}
//Our Deadline Content Create
public function new_deadline_content_create(Request $request)
{
    $request->validate([
        'category_id'=>'required',
        'name'=>'required',
        'position'=>'required', 
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
       
    ]);

    $new_deadline_content_create= new contentdeadline;
    $new_deadline_content_create -> category_id=$request->category_id;
    $new_deadline_content_create -> name=$request->name;
    $new_deadline_content_create -> position=$request->position;
   

    if($request->file('image')){

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $new_deadline_content_create['image']= $filename;
    }

    $new_deadline_content_create->save();

    $success = [
        'message' => 'Successfully! New Deadline Content Create',
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
public function new_deadline_content_update(Request $request , $id)
{
    $request->validate([
        'category_id'=>'nullable',
        'name'=>'nullable',
        'position'=>'nullable',
        'image'=>'mimes:png,jpg,jpeg|nullable|max:500',
    ]);

    $new_deadline_content= contentdeadline::find($id);
    $new_deadline_content -> category_id=$request->category_id;
    $new_deadline_content -> name=$request->name;
    $new_deadline_content -> position=$request->position;

    if($request->file('image')){

        if (File::exists('assets/img/uploaded/'.$new_deadline_content->image)) {
            File::delete('assets/img/uploaded/'.$new_deadline_content->image);
                 }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(('assets/img/uploaded'), $filename);
        $new_deadline_content['image']= $filename;
    }

    $new_deadline_content->save();
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
public function new_deadline_content_destroy(Request $request ,$id)
{
    $new_deadline_content_destroy= contentdeadline::find($id);

    if (File::exists('assets/img/uploaded/'.$new_deadline_content_destroy->image)) {
        File::delete('assets/img/uploaded/'.$new_deadline_content_destroy->image);

        $new_deadline_content_destroy->delete();
    }
    $success = [
        'message' => 'New Deadline Content Deleted Successfully',
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
