<?php

namespace App\Http\Controllers\deadlinedate;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;
use App\Models\maindeadline;

class deadlinedate extends Controller
{
     // ----------------Header Section Start -------------------

     public function new_deadline_date(){
        $new_deadline_date = maindeadline::OrderBy('id','DESC')->get();
        return view('backend.new_deadline_date.new_deadline_date',compact('new_deadline_date'));
    }
    //Header Create
    public function new_deadline_date_create(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            
        ]);

        $new_deadline_date_create= new maindeadline;
        $new_deadline_date_create -> category_name=$request->category_name;
       

        $new_deadline_date_create->save();

        $success = [
            'message' => 'Successfully! Deadline Create',
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
    public function new_deadline_date_update(Request $request , $id)
    {
        $request->validate([
            'category_name'=>'nullable',
            
        ]);

        $new_deadline_date= maindeadline::find($id);
        $new_deadline_date-> category_name=$request->category_name;
       

        $new_deadline_date->save();
        $success = [
            'message' => 'Dead Line Edited Successfully',
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
    public function new_deadline_date_destroy(Request $request ,$id)
    {
        $new_deadline_date_destroy= maindeadline::find($id);

        if (File::exists('assets/img/uploaded/'.$new_deadline_date_destroy->bg_image)) {
            File::delete('assets/img/uploaded/'.$new_deadline_date_destroy->bg_image);

            $new_deadline_date_destroy->delete();
        }
        $success = [
            'message' => 'Dead Line Deleted Successfully',
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
}
