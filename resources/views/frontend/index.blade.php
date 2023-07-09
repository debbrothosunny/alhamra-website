<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Al-Hamra Home</title>
    <!-- Google Fonts -->
    <link href="{{asset('/assets/frontend/css/font-roboto.css')}}" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"
    />
    <link rel="stylesheet" href="{{asset('/assets/frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/toastr/toastr.min.css')}}"/>
   
  </head>
  <body>


  <style>
    .top-banner-box h2 {
  pointer-events: none;
  font-size: 35px;
  font-weight: 500;
  color: #fff;
  font-family:arial;
  line-height: 30px;
  text-transform: capitalize;
  margin-bottom: 20px;
}
  </style>



    <header>
      <div class="header-top">
      @foreach ($footer as $postData)
        <div class="container">
          <div class="header-top-left">
            <i class="{!! $postData->location_icon!!}"></i>
            
            <h4>{{$postData->location}}</h4>
           
          </div>
          <div class="header-top-right">
            <a href="#"><i class="{!! $postData->facebook!!}"></i></a>
            <a href="#"><i class="{!! $postData->twitter!!}"></i></a>
            <a href="#"><i class="{!! $postData->linkdin!!}"></i></a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="header-body">
         @foreach($site_setting as $postData)
        <div class="container">
            <h1 class="logo">
              <a href="{{route('home_index')}}"><img src="{!! asset('assets/img/uploaded/'.$postData->logo) !!}" alt="logo"/></a>
            </h1>
          <ul class="nav">
            <li><a href="{{route('home_index')}}" class="active">Home</a></li>
            <li><a href="{{route('about_index')}}">About</a></li>
            <li><a href="{{route('service_index')}}">Service</a></li>
            <li><a href="{{route('blog_single')}}">Blog</a></li>  
            <li><a href="{{route('contact_index')}}">Contact</a></li>
          </ul>
          <div class="nav-btn">
            <a href="#">{{$postData->button}}</a>
          </div>
          <div class="fa-solid fa-bars" id="menu-btn"></div>
        </div>
        <div class="mobile-header">
          <div class="mobile-top">
            <div class="mobile-logo">
              <a href="home.html"
                ><img src="{!! asset('assets/img/uploaded/'.$postData->logo) !!}" alt="logo"
              /></a>
            </div>
            <i class="fa-solid fa-xmark" id="menu-close"></i>
          </div>
          <ul class="nav">
            <li><a href="{{route('home_index')}}" class="active">Home</a></li>
            <li><a href="{{route('about_index')}}">About</a></li>
            <li><a href="{{route('service_index')}}">Service</a></li>
            <li><a href="{{route('blog_single')}}">Blog</a></li>  
            <li><a href="{{route('contact_index')}}">Contact</a></li>
          </ul>
        </div>
        @endforeach
      </div>
    </header>
    <!-- top banner  -->

    <div class="top-banner">
   
      <div class="top-banner-content">
      @foreach($header as $postData)
        <div
          class="top-banner-box"
          style="
            background: linear-gradient(
                rgba(76, 0, 0, 0.43),
                rgba(76, 0, 0, 0.43)
              ),
              url({!! asset('assets/img/uploaded/'.$postData->bg_image) !!});">
          <div class="container">
            <h2>
            {{$postData->title}}
            </h2>
            <div class="top-banner-btn">
              <a href="#">{{$postData->button1}}</a>
              <a href="#">{{$postData->button2}}</a>
            </div>
          </div>
           
        </div>
        @endforeach
      </div>
      
      <div id="controll">
        <div class="left">
          <i class="fa-solid fa-caret-left"></i>
        </div>
        <div class="right">
          <i class="fa-solid fa-caret-right"></i>
        </div>
      </div>
    </div>

    <!-- top banner  end -->

    <!-- about us  -->
    <div class="about-us">
      @foreach($about as $postData)
      <div class="container">
        <div class="about-image">
          <img
            src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
            alt="image"
          />
        </div>
        <div class="about-text">
        
          <h3>{{$postData->title}}</h3>
          <p>
          {{$postData->description}}</p>
          <a href="#">{{$postData->button}}</a>
        
        </div>
      </div>
      @endforeach
    </div>
    <!-- about us  end -->

    <!-- activity -->
    <div class="activity">
      <div class="header-center">
      @foreach($our_activities_title as $postData)
        <h2>{{$postData->title}}</h2>
      @endforeach
      </div>
     
      <div class="container">
      @foreach($our_activities_content as $postData)
        <div class="activity-box">
          <i aria-hidden="true" class="fas fa-laptop-house"></i>
          <h4>{{$postData->name}}</h4>
        </div>
      @endforeach       
      </div>
    </div>
    <!-- activity end -->

    <!-- image-gallery  eye-open-->
    <div class="image-gallery">
      <div class="header-center">
      @foreach($our_gallery_title as $postData)
        <h2>{{$postData->title}}</h2>
      @endforeach
      </div>
      <div class="container">
        <div class="gallery-content">
        @foreach($our_gallery_image as $postData)
          <div class="gallery-img">
            <img
              src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
              alt="gallery"
            />
            <div class="img-eye">
              <i class="fa-solid fa-eye eye-open"></i>
            </div>
          </div>
        @endforeach
        </div>

        <div class="img-popup">
          <img src="" alt="Popup Image" />
          <div class="close-btn">
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <div class="image-show">
          <a href="#">Show More </a>
        </div>
      </div>
    </div>
    <!-- image-gallery end -->

    <!-- best hotel  -->

    <div class="best-hotel">
      <div class="container">
        <div class="header-center">
        @foreach($best_hotels_title as $postData)
          <h2>{{$postData->title}}</h2>
        @endforeach
        </div>
        <div class="best-hotel-content">
          @foreach($best_hotels_image as $postData)
          <div class="best-hotel-image">
            <img
              src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
              alt="#"
            />
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- best hotel  emd -->

    <!-- buffet -->

    <div class="buffet">
      <div class="container">
        <div class="header-center">
        @foreach($buffet_paradise_title as $postData)
          <h2>{{$postData->title}}</h2>
          @endforeach
        </div>
        <div class="buffet-content best-hotel-content">
          @foreach($buffet_paradise_image as $postData)
          <div class="buffet-image">
            <img
              src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
              alt="#"
            />
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- buffet end -->

    <!-- home form  -->

    <div class="home-form">
      <div class="container">
        <div class="form-content">
          <div class="form-left">
            <h3>Send us a message</h3>
            <p>Contact us for any of your needs or for details about us.</p>

            @if(Session::has('success'))
                <div id="flashmessage" style="color:green;" class="alert-success p-3 mb-3">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div  id="flashmessage" class="alert-danger p-3 mb-3">{{Session::get('fail')}}</div>
            @endif
            <form action="{{route('message')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-input">
                <input type="text" name="name" id="name" placeholder="Your Name" required />
                <span class="text-danger">@error('name'){{$message}}@enderror</span>
              </div>
              <div class="form-input">
                <input type="email" name="email" id="Email" placeholder="Email Address" required />
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
              </div>
              <div class="form-input">
                <input type="text" name="subject" id="Subject" placeholder="Subject" required />
                <span class="text-danger">@error('subject'){{$message}}@enderror</span>
              </div>
              <div class="form-input">
                <textarea name="comment" id="Comment"  placeholder="Your Comment" required></textarea>
                <span class="text-danger">@error('comment'){{$message}}@enderror</span>
              </div>
              <button type="submit">Submit</button>
            </form>
          </div>
          @foreach($contact_section_image as $postData)
          <div class="form-right">
            
            <img
              src="{!! asset('assets/img/uploaded/'.$postData->bg_image) !!}"
              alt=""
            />
            
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- home form  end  -->

    <!-- news  -->
    <div class="news">
      <div class="container">
        <div class="header-center">
          <h2>LATEST NEWS</h2>
        </div>
        <div class="news-content">
         @foreach($blog_content as $postData)
          <div class="news-box">  
            <div class="news-img">
              <img
                src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
                alt="img"
              />
              <div class="news-date">
                <h5>{{$postData->updated_at->format('d')}}</h5>
                <p>{{$postData->updated_at->format('M')}}</p>
              </div>
            </div>
            <div class="news-text">
              <h3>{{$postData->title}}</h3>
              <p>{!!Str::limit($postData->description_1,'100', '....')!!}</p>
              <a href="{{url('blog/'.$postData->CatName->slug.'/'.$postData->slug)}}">Learn More</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- news  end -->
    <!-- footer  -->

    <footer>
      <div class="footer-body">
        @foreach($footer as $postData)
        <div class="container">
          <div class="footer-text">
            <h3>{{$postData->title_1}}</h3>
            <p>
            {!!Str::limit($postData->description_1,'300', '....')!!}
            </p>
          </div>
          <ul class="footer-list">
            <h3>{{$postData->title_2}}</h3>
            <li>
              <i class="{!! $postData->location_icon!!}"></i><span>{{$postData->location}}</span>
            </li>
            <li>
              <i class="{!! $postData->phone_icon_1!!}"></i>
              <span>{{$postData->number_1}}</span>
            </li>
            <li><i class="{!! $postData->phone_icon_2!!}"></i>
            <span>{{$postData->number_2}}</span></li>
            <li>
              <i class="{!! $postData->email_icon!!}"></i
              ><span>{{$postData->email}}</span>
            </li>
          </ul>
          <div class="footer-text">
            <h3>{{$postData->title_3}}</h3>
            <p>{!!Str::limit($postData->description_2,'70', '....')!!}</p>
            <form action="#">
              <input type="email" name="email" id="email-f" required />
              <span>Enter Email</span>
              <button type="submit">Sign Up</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
      <div class="footer-end">
        <div class="container">
         @foreach($site_setting as $postData)
          <p>
          {{$postData->copyright}}
            <a href="@">OpstelIT</a>
          @endforeach
          </p>
        </div>
      </div>
    </footer>

    <!-- footer  end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="{{asset('/assets/frontend/js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      const control = document.getElementById("controll");

      var slider = tns({
        container: ".top-banner-content",
        items: 1,
        slideBy: "page",
        autoplay: true,
        loop: true,

        autoplayResetOnVisibility: false,
        autoplayButtonOutput: false,
        autoplay: true,

        nav: true,
        gutter: 30,
        mouseDrag: true,
        navPosition: "bottom",
        controlsContainer: control,
        prevButton: ".left",
        nextButton: ".right",
      });
    </script>


<!-- --------------Contact Section Scroll Script -------------------->
    <script>
        // Alert Hiden
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        // Scroll 
        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>

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
