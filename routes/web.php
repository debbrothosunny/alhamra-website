<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\deadlinedate\deadlinedate;
use App\Http\Controllers\deadlinecontent\deadlinecontent;
use App\Http\Controllers\Captcha\ReCaptchaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('backend/home/header/header');
// });
// ---------------FrontEnd Controller----------------------------------------------

    Route::get('/', [FrontendController::class, 'home_index'])->name('home_index');
    Route::get('/about_index', [FrontendController::class, 'about_index'])->name('about_index');
    Route::get('/service_index', [FrontendController::class, 'service_index'])->name('service_index');
    Route::get('/contact_index', [FrontendController::class, 'contact_index'])->name('contact_index');
   
    // blog Page

    Route::get('/blog/{category_slug}/{post_slug}',[FrontendController::class,'blog_page']);
    Route::get('/blog_single',[FrontendController::class,'blog_single'])->name('blog_single');

    
    
    Route::group(['middleware' => 'auth'], function () {
    
    // Header Route
    Route::get('/header', [HomeController::class, 'header'])->name('header');
    Route::post('/header/create', [HomeController::class, 'header_create'])->name('save.header');
    Route::post('/header/update/{id}', [HomeController::class, 'header_update'])->name('update.header');
    Route::get('/header/delete/{id}', [HomeController::class, 'header_destroy'])->name('delete.header_destroy');

    // about route
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::post('/about/create', [HomeController::class, 'about_create'])->name('save.about');
    Route::post('/about/update/{id}', [HomeController::class, 'about_update'])->name('update.about');
    Route::get('/about/delete/{id}', [HomeController::class, 'about_destroy'])->name('delete.about_destroy');

    // our_activities_title route
    Route::get('/our_activities_title', [HomeController::class, 'our_activities_title'])->name('our_activities_title');
    Route::post('/our_activities_title/create', [HomeController::class, 'our_activities_title_create'])->name('save.our_activities_title_create');
    Route::post('/our_activities_title/update/{id}', [HomeController::class, 'our_activities_title_update'])->name('update.our_activities_title');
    Route::get('/our_activities_title/delete/{id}', [HomeController::class, 'our_activities_title_destroy'])->name('delete.our_activities_title');

    // our activities content
    Route::get('/our_activities_content', [HomeController::class, 'our_activities_content'])->name('our_activities_content');
    Route::post('/our_activities_content/create', [HomeController::class, 'our_activities_content_create'])->name('save.our_activities_content_create');
    Route::post('/our_activities_content/update/{id}', [HomeController::class, 'our_activities_content_update'])->name('update.our_activities_content');
    Route::get('/our_activities_content/delete/{id}', [HomeController::class, 'our_activities_content_destroy'])->name('delete.our_activities_content_destroy');

    // Our Gallery Title
    Route::get('/our_gallery_title', [HomeController::class, 'our_gallery_title'])->name('our_gallery_title');
    Route::post('/our_gallery_title/create', [HomeController::class, 'our_gallery_title_create'])->name('save.our_gallery_title_create');
    Route::post('/our_gallery_title/update/{id}', [HomeController::class, 'our_gallery_title_update'])->name('update.our_gallery_title');
    Route::get('/our_gallery_title/delete/{id}', [HomeController::class, 'our_gallery_title_destroy'])->name('delete.our_gallery_title_destroy');


    // Our Gallery Image
    Route::get('/our_gallery_image', [HomeController::class, 'our_gallery_image'])->name('our_gallery_image');
    Route::post('/our_gallery_image/create', [HomeController::class, 'our_gallery_image_create'])->name('save.our_gallery_image_create');
    Route::post('/our_gallery_image/update/{id}', [HomeController::class, 'our_gallery_image_update'])->name('update.our_gallery_image');
    Route::get('/our_gallery_image/delete/{id}', [HomeController::class, 'our_gallery_image_destroy'])->name('delete.our_gallery_image_destroy');

    // Best Hotels Title

    Route::get('/best_hotels_title', [HomeController::class, 'best_hotels_title'])->name('best_hotels_title');
    Route::post('/best_hotels_title/create', [HomeController::class, 'best_hotels_title_create'])->name('save.best_hotels_title_create');
    Route::post('/best_hotels_title/update/{id}', [HomeController::class, 'best_hotels_title_update'])->name('update.best_hotels_title');
    Route::get('/best_hotels_title/delete/{id}', [HomeController::class, 'best_hotels_title_destroy'])->name('delete.best_hotels_title_destroy');

    // Best Hotels Image
    Route::get('/best_hotels_image', [HomeController::class, 'best_hotels_image'])->name('best_hotels_image');
    Route::post('/best_hotels_image/create', [HomeController::class, 'best_hotels_image_create'])->name('save.best_hotels_image_create');
    Route::post('/best_hotels_image/update/{id}', [HomeController::class, 'best_hotels_image_update'])->name('update.best_hotels_image');
    Route::get('/best_hotels_image/delete/{id}', [HomeController::class, 'best_hotels_image_destroy'])->name('delete.best_hotels_image_destroy');

    // buffet_paradise_title
    Route::get('/buffet_paradise_title', [HomeController::class, 'buffet_paradise_title'])->name('buffet_paradise_title');
    Route::post('/buffet_paradise_title/create', [HomeController::class, 'buffet_paradise_title_create'])->name('save.buffet_paradise_title_create');
    Route::post('/buffet_paradise_title/update/{id}', [HomeController::class, 'buffet_paradise_title_update'])->name('update.buffet_paradise_title');
    Route::get('/buffet_paradise_title/delete/{id}', [HomeController::class, 'buffet_paradise_title_destroy'])->name('delete.buffet_paradise_title_destroy');
    
    // buffet_paradise_image
    Route::get('/buffet_paradise_image', [HomeController::class, 'buffet_paradise_image'])->name('buffet_paradise_image');
    Route::post('/buffet_paradise_image/create', [HomeController::class, 'buffet_paradise_image_create'])->name('save.buffet_paradise_image_create');
    Route::post('/buffet_paradise_image/update/{id}', [HomeController::class, 'buffet_paradise_image_update'])->name('update.buffet_paradise_image');
    Route::get('/buffet_paradise_image/delete/{id}', [HomeController::class, 'buffet_paradise_image_destroy'])->name('delete.buffet_paradise_image_destroy');
    
    // Blog Header Title
    Route::get('/blog_title', [HomeController::class, 'blog_title'])->name('blog_title');
    Route::post('/blog_title/create', [HomeController::class, 'blog_title_create'])->name('save.blog_title_create');
    Route::post('/blog_title/update/{id}', [HomeController::class, 'blog_title_update'])->name('update.blog_title');
    Route::get('/blog_title/delete/{id}', [HomeController::class, 'blog_title_destroy'])->name('delete.blog_title_destroy');
    
    
    // contact_section_image
    Route::get('/contact_section_image', [HomeController::class, 'contact_section_image'])->name('contact_section_image');
    Route::post('/contact_section_image/create', [HomeController::class, 'contact_section_image_create'])->name('save.contact_section_image_create');
    Route::post('/contact_section_image/update/{id}', [HomeController::class, 'contact_section_image_update'])->name('update.contact_section_image');
    Route::get('/contact_section_image/delete/{id}', [HomeController::class, 'contact_section_image_destroy'])->name('delete.contact_section_image_destroy');

    // Site Setting
    Route::get('/site_setting', [HomeController::class, 'site_setting'])->name('site_setting');
    Route::post('/site_setting/create', [HomeController::class, 'site_setting_create'])->name('save.site_setting_create');
    Route::post('/site_setting/update/{id}', [HomeController::class, 'site_setting_update'])->name('update.site_setting');
    Route::get('/site_setting/delete/{id}', [HomeController::class, 'site_setting_destroy'])->name('delete.site_setting_destroy');  
    // footer

    Route::get('/footer', [HomeController::class, 'footer'])->name('footer');
    Route::post('/footer/create', [HomeController::class, 'footer_create'])->name('save.footer_create');
    Route::post('/footer/update/{id}', [HomeController::class, 'footer_update'])->name('update.footer');
    Route::get('/footer/delete/{id}', [HomeController::class, 'footer_destroy'])->name('delete.footer_destroy');

    // --------------------------------About Page Controller--------------------------

    Route::get('/about_header', [AboutController::class, 'about_header'])->name('about_header');
    Route::post('/about_header/create', [AboutController::class, 'about_header_create'])->name('save.about_header_create');
    Route::post('/about_header/update/{id}', [AboutController::class, 'about_header_update'])->name('update.about_header');
    Route::get('/about_header/delete/{id}', [AboutController::class, 'about_header_destroy'])->name('delete.about_header_destroy');

    // --------------------------------Our Qualities Controller--------------------------
    Route::get('/our_qualities', [AboutController::class, 'our_qualities'])->name('our_qualities');
    Route::post('/our_qualities/create', [AboutController::class, 'our_qualities_create'])->name('save.our_qualities_create');
    Route::post('/our_qualities/update/{id}', [AboutController::class, 'our_qualities_update'])->name('update.our_qualities');
    Route::get('/our_qualities/delete/{id}', [AboutController::class, 'our_qualities_destroy'])->name('delete.our_qualities_destroy');

    // --------------------------------why_choose_us_title--------------------------
    Route::get('/why_choose_us', [AboutController::class, 'why_choose_us_title'])->name('why_choose_us_title');
    Route::post('/why_choose_us/create', [AboutController::class, 'why_choose_us_title_create'])->name('save.why_choose_us_title_create');
    Route::post('/why_choose_us/update/{id}', [AboutController::class, 'why_choose_us_title_update'])->name('update.why_choose_us_title');
    Route::get('/why_choose_us/delete/{id}', [AboutController::class, 'why_choose_us_title_destroy'])->name('delete.why_choose_us_title_destroy');

    // Why You Choose US Content
    Route::get('/why_choose_us_content', [AboutController::class, 'why_choose_us_content'])->name('why_choose_us_content');
    Route::post('/why_choose_us_content/create', [AboutController::class, 'why_choose_us_content_create'])->name('save.why_choose_us_content_create');
    Route::post('/why_choose_us_content/update/{id}', [AboutController::class, 'why_choose_us_content_update'])->name('update.why_choose_us_content');
    Route::get('/why_choose_us_content/delete/{id}', [AboutController::class, 'why_choose_us_content_destroy'])->name('delete.why_choose_us_content_destroy');

    // our_plan_section
    Route::get('/our_plan_section', [AboutController::class, 'our_plan'])->name('our_plan');
    Route::post('/our_plan_section/create', [AboutController::class, 'our_plan_create'])->name('save.our_plan_create');
    Route::post('/our_plan_section/update/{id}', [AboutController::class, 'our_plan_update'])->name('update.our_plan');
    Route::get('/our_plan_section/delete/{id}', [AboutController::class, 'our_plan_destroy'])->name('delete.our_plan_destroy');

    // our_management_deadline
    Route::get('/our_management_deadline', [AboutController::class, 'our_management_deadline'])->name('our_management_deadline');
    Route::post('/our_management_deadline/create', [AboutController::class, 'our_management_deadline_create'])->name('save.our_management_deadline_create');
    Route::post('/our_management_deadline/update/{id}', [AboutController::class, 'our_management_deadline_update'])->name('update.our_management_deadline');
    Route::get('/our_management_deadline/delete/{id}', [AboutController::class, 'our_management_deadline_destroy'])->name('delete.our_management_deadline_destroy');
   
   
    // our_management_title
    Route::get('/our_management', [AboutController::class, 'our_management_title'])->name('our_management_title');
    Route::post('/our_management/create', [AboutController::class, 'our_management_title_create'])->name('save.our_management_title_create');
    Route::post('/our_management/update/{id}', [AboutController::class, 'our_management_title_update'])->name('update.our_management_title');
    Route::get('/our_management/delete/{id}', [AboutController::class, 'our_management_title_destroy'])->name('delete.our_management_title_destroy');
   
    // our_deadline_content
    Route::get('/our_deadline_content', [AboutController::class, 'our_deadline_content'])->name('our_deadline_content');
    Route::post('/our_deadline_content/create', [AboutController::class, 'our_deadline_content_create'])->name('save.our_deadline_content_create');
    Route::post('/our_deadline_content/update/{id}', [AboutController::class, 'our_deadline_content_update'])->name('update.our_deadline_content');
    Route::get('/our_deadline_content/delete/{id}', [AboutController::class, 'our_deadline_content_destroy'])->name('delete.our_deadline_content_destroy');

    // ---------------------------Service Page Controller----------------------------
    Route::get('/servicepage', [ServiceController::class, 'service_header'])->name('service_header');
    Route::post('/servicepage/create', [ServiceController::class, 'service_header_create'])->name('save.service_header_create');
    Route::post('/servicepage/update/{id}', [ServiceController::class, 'service_header_update'])->name('update.service_header');
    Route::get('/servicepage/delete/{id}', [ServiceController::class, 'service_header_destroy'])->name('delete.service_header_destroy');

    // ---------------------------Service Second Section----------------------------
    Route::get('/second_section', [ServiceController::class, 'second_section'])->name('second_section');
    Route::post('/second_section/create', [ServiceController::class, 'second_section_create'])->name('save.second_section_create');
    Route::post('/second_section/update/{id}', [ServiceController::class, 'second_section_update'])->name('update.second_section');
    Route::get('/second_section/delete/{id}', [ServiceController::class, 'second_section_destroy'])->name('delete.second_section_destroy');
    
    // ---------------------------What We Do Title----------------------------
    Route::get('/what_we_do', [ServiceController::class, 'what_we_do'])->name('what_we_do');
    Route::post('/what_we_do/create', [ServiceController::class, 'what_we_do_create'])->name('save.what_we_do_create');
    Route::post('/what_we_do/update/{id}', [ServiceController::class, 'what_we_do_update'])->name('update.what_we_do');
    Route::get('/what_we_do/delete/{id}', [ServiceController::class, 'what_we_do_destroy'])->name('delete.what_we_do_destroy');
    
    // ---------------------------what_we_do_content----------------------------
    Route::get('/what_we_do_content', [ServiceController::class, 'what_we_do_content'])->name('what_we_do_content');
    Route::post('/what_we_do_content/create', [ServiceController::class, 'what_we_do_content_create'])->name('save.what_we_do_content_create');
    Route::post('/what_we_do_content/update/{id}', [ServiceController::class, 'what_we_do_content_update'])->name('update.what_we_do_content');
    Route::get('/what_we_do_content/delete/{id}', [ServiceController::class, 'what_we_do_content_destroy'])->name('delete.what_we_do_content_destroy');
    
    // ---------------------------Trusted Title----------------------------
    Route::get('/trusted_customer_title', [ServiceController::class, 'trusted_customer_title'])->name('trusted_customer_title');
    Route::post('/trusted_customer_title/create', [ServiceController::class, 'trusted_customer_title_create'])->name('save.trusted_customer_title_create');
    Route::post('/trusted_customer_title/update/{id}', [ServiceController::class, 'trusted_customer_title_update'])->name('update.trusted_customer_title');
    Route::get('/trusted_customer_title/delete/{id}', [ServiceController::class, 'trusted_customer_title_destroy'])->name('delete.trusted_customer_title_destroy');
    
    // ---------------------------Trusted Slider----------------------------
    Route::get('/trusted_customer_slider', [ServiceController::class, 'trusted_customer_slider'])->name('trusted_customer_slider');
    Route::post('/trusted_customer_slider/create', [ServiceController::class, 'trusted_customer_slider_create'])->name('save.trusted_customer_slider_create');
    Route::post('/trusted_customer_slider/update/{id}', [ServiceController::class, 'trusted_customer_slider_update'])->name('update.trusted_customer_slider');
    Route::get('/trusted_customer_slider/delete/{id}', [ServiceController::class, 'trusted_customer_slider_destroy'])->name('delete.trusted_customer_slider_destroy');
   
    // ---------------------------Blog page Header----------------------------
    Route::get('/blogepage', [BlogController::class, 'blog_header'])->name('blog_header');
    Route::post('/blogepage/create', [BlogController::class, 'blog_header_create'])->name('save.blog_header_create');
    Route::post('/blogepage/update/{id}', [BlogController::class, 'blog_header_update'])->name('update.blog_header');
    Route::get('/blogepage/delete/{id}', [BlogController::class, 'blog_header_destroy'])->name('delete.blog_header_destroy');

    // ---------------------------Blog Page Main-----------------------
    Route::get('/blogmain', [BlogController::class, 'blog_main'])->name('blog_main');
    Route::post('/blogmain/create', [BlogController::class, 'blog_main_create'])->name('save.blog_main_create');
    Route::post('/blogmain/update/{id}', [BlogController::class, 'blog_main_update'])->name('update.blog_main');
    Route::get('/blogmain/delete/{id}', [BlogController::class, 'blog_main_destroy'])->name('delete.blog_main_destroy');

    // ---------------------------Blog Page Content-----------------------
    Route::get('/blogcontent', [BlogController::class, 'blog_content'])->name('blog_content');
    Route::post('/blogcontent/create', [BlogController::class, 'blog_content_create'])->name('save.blog_content_create');
    Route::post('/blogcontent/update/{id}', [BlogController::class, 'blog_content_update'])->name('update.blog_content');
    Route::get('/blogcontent/delete/{id}', [BlogController::class, 'blog_content_destroy'])->name('delete.blog_content_destroy');

    // ---------------------------Blog Page Comment-----------------------
    Route::get('/blog_comment_section', [BlogController::class, 'blog_comment'])->name('blog_comment');
    Route::post('/comment/create', [BlogController::class, 'blog_comment_create'])->name('comment');
    Route::get('/blog_comment_section/delete/{id}', [BlogController::class, 'blog_comment_destroy'])->name('delete.blog_comment_destroy');

    // ---------------------------Contact page ----------------------------
    Route::get('/contactpage', [ContactController::class, 'contact_header'])->name('contact_header');
    Route::post('/contactpage/create', [ContactController::class, 'contact_header_create'])->name('save.contact_header_create');
    Route::post('/contactpage/update/{id}', [ContactController::class, 'contact_header_update'])->name('update.contact_header');
    Route::get('/contactpage/delete/{id}', [ContactController::class, 'contact_header_destroy'])->name('delete.contact_header_destroy');
    
    // ---------------------------Contact Content ----------------------------
    Route::get('/contact_content', [ContactController::class, 'contact_content'])->name('contact_content');
    Route::post('/contact_content/create', [ContactController::class, 'contact_content_create'])->name('save.contact_content_create');




    //--------------------- New Deadline date Controller----------------------------
    Route::get('/new_deadline_date', [deadlinedate::class, 'new_deadline_date'])->name('new_deadline_date');
    Route::post('/new_deadline_date/create', [deadlinedate::class, 'new_deadline_date_create'])->name('save.new_deadline_date_create');
    Route::post('/new_deadline_date/update/{id}', [deadlinedate::class, 'new_deadline_date_update'])->name('update.new_deadline_date');
    Route::get('/new_deadline_date/delete/{id}', [deadlinedate::class, 'new_deadline_date_destroy'])->name('delete.new_deadline_date_destroy');
    

    //--------------------- New Deadline Content Controller----------------------------
    Route::get('/new_deadline_content', [deadlinecontent::class, 'new_deadline_content'])->name('new_deadline_content');
    Route::post('/new_deadline_content/create', [deadlinecontent::class, 'new_deadline_content_create'])->name('save.new_deadline_content_create');
    Route::post('/new_deadline_content/update/{id}', [deadlinecontent::class, 'new_deadline_content_update'])->name('update.new_deadline_content');
    Route::get('/new_deadline_content/delete/{id}', [deadlinecontent::class, 'new_deadline_content_destroy'])->name('delete.new_deadline_content_destroy');
    

    // Captcha Controller
    // Route::get('my-captcha', [ReCaptchaController::class,'myCaptcha'])->name('myCaptcha');
    // Route::post('my-captcha', [ReCaptchaController::class,'myCaptchaPost'])->name('myCaptcha.post');
    // Route::get('refresh_captcha', [ReCaptchaController::class,'refreshCaptcha'])->name('refresh_captcha');
 
});

// contact_section_message
Route::get('/contact_message', [HomeController::class, 'contact_message'])->name('contact_message');
Route::post('/message/create', [HomeController::class, 'contact_message_create'])->name('message');
Route::get('/contact_message/delete/{id}', [HomeController::class, 'contact_message_destroy'])->name('delete.contact_message_destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

