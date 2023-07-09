<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
use App\Models\contactsectionimage;
use App\Models\blogcontent;
use App\Models\blogcomment;
use App\Models\sitesetting;
use App\Models\footer;
use App\Models\blogpageheader;
use App\Models\blogmain;


use App\Models\aboutheader;
use App\Models\ourqualities;
use App\Models\whychooseustitle;
use App\Models\whychooseuscontent;
use App\Models\ourplancontent;
use App\Models\ourmanagementtitle;
use App\Models\maindeadline;
use App\Models\contentdeadline;

use App\Models\serviceheader;
use App\Models\servicesecond;
use App\Models\whatwedotitle;
use App\Models\whatwedocontent;
use App\Models\trustedtitle;
use App\Models\trustedslider;


use App\Models\contactheader;
use App\Models\contactcontent;

class FrontendController extends Controller
{

    // Home page

    public function home_index(){
        $header = header::take(3)->get();
        $about = about::take(1)->get();
        $our_activities_title = ouractivitiestitle::take(1)->get();
        $our_activities_content = ouractivitiescontent::take(4)->get();
        $our_gallery_title = ourgallerytitle::take(1)->get();
        $our_gallery_image = ourgalleryimage::take(8)->get();
        $best_hotels_title = besthoteltitle::take(1)->get();
        $best_hotels_image = besthotelimage::take(6)->get();
        $buffet_paradise_title = buffetparadisetitle::take(1)->get();
        $buffet_paradise_image = buffetparadiseimage::take(8)->get();
        $blog_content = blogcontent::OrderBy('created_at','DESC')->take(3)->get();
        $contact_section_image = contactsectionimage::take(1)->get();
        $site_setting = sitesetting::take(1)->get();
        $footer = footer::take(1)->get(); 

        return view('frontend.index',compact('header','about','our_activities_title','our_activities_content','our_gallery_title','our_gallery_image','best_hotels_title','best_hotels_image','buffet_paradise_title','buffet_paradise_image','blog_content','contact_section_image','site_setting','footer'));
    }

    // Blog_Page

        public function blog_post(string $category_slug){
        $blog_header = blogpageheader::OrderBy('id','DESC')->get();
        $categories = blogmain::get();
        $category = blogmain::where('slug', $category_slug)->first();
        
        return view('frontend.blog',compact('blog_header','blog_main','blog_content'));
    } 

// blog_single
        public function blog_single(){
        $blog_header = blogpageheader::take(1)->get();
        $blog_content = blogcontent::OrderBy('created_at','DESC')->take(3)->get();
        $site_setting = sitesetting::take(1)->get();
        $footer = footer::take(1)->get();
        return view('frontend.blog_single',compact('blog_header','blog_content','site_setting','footer'));
    }

        public function blog_page(string $category_slug, string $post_slug){
        $site_setting = sitesetting::take(1)->get();
        $footer = footer::take(1)->get(); 
        $category = blogmain::where('slug', $category_slug)->first();
        $blog_comment = blogcomment::OrderBy('id','DESC')->take(1)->get();

        if($category)
        {
            $post = blogcontent::where('category_id', $category->id)->where('slug', $post_slug)->first();

            return view('frontend.blog_page', compact('post','category','site_setting','footer','blog_comment')); 
        }
        else
        {
            return redirect('/');
        }
    }

    // About Page

        public function about_index(){
        $about_header = aboutheader::take(1)->get();
        $our_qualities = ourqualities::take(1)->get();
        $why_choose_us_title = whychooseustitle::take(1)->get();
        $why_choose_us_content = whychooseuscontent::take(3)->get();
        $our_plan = ourplancontent::take(1)->get();
        $our_management_title = ourmanagementtitle::take(1)->get();
        $new_deadline_date = maindeadline::take(15)->get();
        $new_deadline_content = contentdeadline::take(120)->get();
        $site_setting = sitesetting::take(1)->get();
        $footer = footer::take(1)->get(); 

        return view('frontend.about',compact('about_header','our_qualities','why_choose_us_title','why_choose_us_content','our_plan','new_deadline_date','our_management_title','new_deadline_content','site_setting','footer'));
    }

    // Service page
    
    public function service_index(){
        $service_header = serviceheader::take(1)->get();
        $second_section = servicesecond::take(3)->get();
        $what_we_do = whatwedotitle::take(1)->get();
        $what_we_do_content = whatwedocontent::take(4)->get();
        $trusted_customer_title = trustedtitle::take(1)->get();
        $trusted_customer_slider = trustedslider::take(8)->get();
        $site_setting = sitesetting::take(1)->get();
        $footer = footer::take(1)->get();

    return view('frontend.service',compact('service_header','second_section','what_we_do','what_we_do_content','trusted_customer_title','trusted_customer_slider','site_setting','footer'));
 }


//  Contact Page

public function contact_index(){
    $contact_header = contactheader::take(1)->get();
    $contact_content = contactcontent::take(1)->get();
    $site_setting = sitesetting::take(1)->get();
    $footer = footer::take(1)->get();

    return view('frontend.contact',compact('contact_header','contact_content','site_setting','footer'));
}

}
