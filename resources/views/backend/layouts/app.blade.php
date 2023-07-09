<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/assets/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/backend/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/assets/backend/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/backend/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/backend/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/assets/backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/backend/css/style.css')}}">
    <!-- Toastr styles -->
    <link rel="stylesheet" href="{{asset('/assets/toastr/toastr.min.css')}}"/>
   
   <style>
        .question {
            font-size: 80px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo text-white text-decoration-none" href="index.html">Opstel It </a>
          <a class="sidebar-brand brand-logo-mini text-white text-decoration-none" href="index.html"></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#home_page" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Home</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home_page">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/header') ? '' : ''}}" href="{{route('header')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Header</span>
                  </a>
                </li>
              </ul>

              <!-- ------about scetion---------- -->

              <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/about') ? '' : ''}}" href="{{route('about')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">About</span>
                  </a>
                </li>
              </ul>


               <!-- -----------OUR-ACTIVITIES-Title-Scetion------------- -->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/our_activities_title') ? '' : ''}}" href="{{route('our_activities_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Our Activities Title</span>
                  </a>
                </li>
              </ul>

<!-- -------------------our Activities Content Section ------------------>

              <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/our_activities_content') ? '' : ''}}" href="{{route('our_activities_content')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Our Activities Content</span>
                  </a>
                </li>
              </ul>

              <!-- -------------------Our Gallery Section ------------------>

              <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/our_gallery_title') ? '' : ''}}" href="{{route('our_gallery_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Our Gallery Title</span>
                  </a>
                </li>
              </ul>



               <!-- -------------------Our Gallery Image ------------------>

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/our_gallery_image') ? '' : ''}}" href="{{route('our_gallery_image')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Our Gallery Image</span>
                  </a>
                </li>
              </ul>

              <!-- ----------best hotels title------------------------ -->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/best_hotels_title') ? '' : ''}}" href="{{route('best_hotels_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Best Hotels Title</span>
                  </a>
                </li>
              </ul>

                <!-- ----------best hotels Image------------------------ -->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/best_hotels_image') ? '' : ''}}" href="{{route('best_hotels_image')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Best Hotels Image</span>
                  </a>
                </li>
              </ul>

              <!-- Buffet paradise Title -->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/buffet_paradise_title') ? '' : ''}}" href="{{('buffet_paradise_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Buffet paradise Title</span>
                  </a>
                </li>
              </ul>

              <!-- Buffet paradise Image -->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/buffet_paradise_image') ? '' : ''}}" href="{{('buffet_paradise_image')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Buffet paradise Image</span>
                  </a>
                </li>
              </ul>

              <!-- Blog Header Title -->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/blog_title') ? '' : ''}}" href="{{('blog_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Blog Title</span>
                  </a>
                </li>
              </ul>

              <!-- contact section  Image -->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/contact_section_image') ? 'active' : ''}}" href="{{('contact_section_image')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Contact Section Image</span>
                  </a>
                </li>
   
                <!-- contact section  message -->

  


              <!-- ---------------site_setting------------------->

               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/site_setting') ? 'active' : ''}}" href="{{('site_setting')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Site Setting</span>
                  </a>
                </li>
              </ul>

              <!-- -------------------------Footer------------------------- -->
               <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                  <a class="nav-link {{request()->is('/footer') ? '' : ''}}" href="{{('footer')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Footer</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          
          
         <!-- --------------------------------About Page------------------------------------------ -->
          
          
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#about_page" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">About Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about_page">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link {{request()->is('/about_header') ? '' : ''}}" href="{{route('about_header')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">About Header</span>
                  </a>
                </li>
              </ul>


              <!-------------------------------------- Our Qualities--------------------- -->
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link {{request()->is('/our_qualities') ? '' : ''}}" href="{{route('our_qualities')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Our Qualities </span>
                  </a>
                </li>
              </ul>

              <!-- -------------------------------Why You Choose US Title------------------------ -->
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link {{request()->is('/why_choose_us') ? '' : ''}}" href="{{route('why_choose_us_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Why You Choose US Title</span>
                  </a>
                </li>
              </ul>

                 <!-- why_choose_us_content -->

              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link {{request()->is('/why_choose_us_content') ? '' : ''}}" href="{{route('why_choose_us_content')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Why You Choose US Content</span>
                  </a>
                </li>
              </ul>

              <!-- our_plan_section -->

              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link {{request()->is('/our_plan_section') ? '' : ''}}" href="{{route('our_plan')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Our Plan</span>
                  </a>
                </li>
              </ul>

              <!-- -our_management_title -->

              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link {{request()->is('/our_management') ? '' : ''}}" href="{{route('our_management_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Our Management Title</span>
                  </a>
                </li>
              </ul>

              <!-- -Our Management Deadline -->

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/new_deadline_date') ? '' : ''}}" href="{{route('new_deadline_date')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title"> Dead Line Date</span>
                  </a>
                </li>
              </ul>
              
              <!-- our_deadline_content -->

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/new_deadline_content') ? '' : ''}}" href="{{route('new_deadline_content')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Dead Line Content</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <!--------------------------------- Service Page ------------------------ -->

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#service_page" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Service Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="service_page">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/servicepage') ? '' : ''}}" href="{{route('service_header')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Service Header</span>
                  </a>
                </li>
              </ul>

              <!-- Service Second Section -->
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/second_section') ? '' : ''}}" href="{{route('second_section')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Service Second Section</span>
                  </a>
                </li>
              </ul>

              <!-- What We Do Title -->
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/what_we_do') ? '' : ''}}" href="{{route('what_we_do')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">What We Do Title</span>
                  </a>
                </li>
              </ul>

              <!-- What We Do Content -->
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/what_we_do_content') ? '' : ''}}" href="{{route('what_we_do_content')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">What We Do Content</span>
                  </a>
                </li>
              </ul>

              <!-- trusted_customer_title -->

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/trusted_customer_title') ? '' : ''}}" href="{{route('trusted_customer_title')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Trusted Title</span>
                  </a>
                </li>
              </ul>


              <!-- trusted_customer_slider -->

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/trusted_customer_slider') ? '' : ''}}" href="{{route('trusted_customer_slider')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Trusted Slider</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <!-------------------------------- Blog Page-------------------- -->


          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#blog_page" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Blog Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog_page">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/blogpage') ? '' : ''}}" href="{{route('blog_header')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Blog Header</span>
                  </a>
              </li>
              </ul>

              <!------------------------------------ blog main --------------------------------- -->

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/blogmain') ? '' : ''}}" href="{{route('blog_main')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Blog Main</span>
                  </a>
              </li>
              </ul>

              <!------------------------------------ blog Content --------------------------------- -->

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/blogcontent') ? '' : ''}}" href="{{route('blog_content')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Blog Content</span>
                  </a>
              </li>
              </ul>
              <!------------------------------------  blog comment --------------------------------- -->

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/blog_comment_section') ? '' : ''}}" href="{{route('blog_comment')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Blog Comment</span>
                  </a>
              </li>
              </ul>
            </div>
          </li>

          <!-- --------------------------------Contact page---------------------- -->

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#contact_page" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Contact Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contact_page">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/contactpage') ? '' : ''}}" href="{{route('contact_header')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Contact Header</span>
                  </a>
              </li>
              </ul>

              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link {{request()->is('/contact_content') ? '' : ''}}" href="{{route('contact_content')}}">
                    <span class="menu-icon">
                      <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Contact Content</span>
                  </a>
              </li>
              </ul>
            </div>
          </li>





          
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </a>
                  <div class="dropdown-divider"></div>    
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          {{-- yield content start --}}

          @yield('content')

         {{-- yield content end --}}
         
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/assets/backend/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('/assets/backend/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/assets/backend/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('/assets/backend/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('/assets/backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('/assets/backend/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/assets/backend/js/off-canvas.js')}}"></script>
    <script src="{{asset('/assets/backend/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/assets/backend/js/misc.js')}}"></script>
    <script src="{{asset('/assets/backend/js/settings.js')}}"></script>
    <script src="{{asset('/assets/backend/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    
    <script src="{{asset('/assets/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('/assets/backend/js/dashboard.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- End custom js for this page -->

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>
    
  </body>
</html>
