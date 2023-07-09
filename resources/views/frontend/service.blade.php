<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Al-Hmara Home</title>
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
  </head>
  <body>
    <header>
      <div class="header-top">
        <div class="container">
          <div class="header-top-left">
            <i class="fa-solid fa-location-dot"></i>
              @foreach ($footer as $postData)
              <h4>{{$postData->location}}</h4>
              @endforeach
          </div>
          <div class="header-top-right">
            <a href="#"><i class="{!! $postData->facebook!!}"></i></a>
            <a href="#"><i class="{!! $postData->twitter!!}"></i></a>
            <a href="#"><i class="{!! $postData->linkdin!!}"></i></a>
          </div>
        </div>
      </div>
      <div class="header-body">
        @foreach($site_setting as $postData)
        <div class="container">
          <h1 class="logo">
            <a href="home.html"
              ><img src="{!! asset('assets/img/uploaded/'.$postData->logo) !!}" alt="logo"
            /></a>
          </h1>
          <ul class="nav">
            <li><a href="{{route('home_index')}}">Home</a></li>
            <li><a href="{{route('about_index')}}">About</a></li>
            <li><a href="{{route('service_index')}}" class="active">Service</a></li>
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
                ><img src="image/Al-hamra-logo-01-1-300x268.png" alt="logo"
              /></a>
            </div>
            <i class="fa-solid fa-xmark" id="menu-close"></i>
          </div>

          <ul class="nav">
            <li><a href="{{route('home_index')}}">Home</a></li>
            <li><a href="{{route('about_index')}}">About</a></li>
            <li><a href="{{route('service_index')}}" class="active">Service</a></li>
            <li><a href="{{route('blog_single')}}">Blog</a></li>
            <li><a href="{{route('contact_index')}}">Contact</a></li>
          </ul>
        </div>
        @endforeach
      </div>
    </header>
    <!-- page header -->
    <div
      @foreach($service_header as $postData)
      class="page-header"
      style="
        background: linear-gradient(#00000088, #00000088),
          url({!! asset('assets/img/uploaded/'.$postData->bg_image) !!});">
      <h2>{{$postData->title}}</h2>
      @endforeach
    </div>
    <!-- page header end -->

    <!-- service  cta-->

    <div class="service-cta">
      <div class="container">
        <div class="service-cta-content">
         @foreach($second_section as $postData)
          <div class="service-cta-box">
            <i class="fas fa-hotel"></i>
            <h4>{{$postData->title}}</h4>
            <p>{{$postData->description}}</p>
            <a href="#">{{$postData->button}}</a>
          </div>
         @endforeach
        </div>
      </div>
    </div>

    <!-- service cta end -->

    <!-- we do -->

    <div class="we-do">
      <div class="container">
        <div class="we-do-header">
          @foreach($what_we_do as $postData)
          <h5>{{$postData->title}}</h5>
          <h2>{{$postData->subtitle}}</h2>
          @endforeach
        </div>
        <div class="we-do-content">
          @foreach($what_we_do_content as $postData)
          <div class="we-do-box">
            <i class="fa-solid fa-table-list"></i>
            <h4>{{$postData->title}}</h4>
            <p>{{$postData->description}}</p>
            <span>{{$postData->sub_title}}</span>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- we do end -->

    <!-- we trust  -->

    <div class="we-trust">
      <div class="container">
        <div class="we-trust-content">
          <div class="we-trust-left">
           @foreach($trusted_customer_title as $postData)
            <h3>{{$postData->title}}</h3>
            <p>{{$postData->description}}</p>
          </div>
           @endforeach
          <div class="we-trust-right">
            <div class="we-trust-slider">
              @foreach($trusted_customer_slider as $postData)
              <div class="trust-img">
                <img
                  src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
                  alt="slider"
                />
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- we trust  end -->

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
    <script>
      var slider = tns({
        container: ".we-trust-slider",
        items: 3,
        slideBy: "page",
        autoplay: true,
        loop: true,

        autoplayResetOnVisibility: false,
        autoplayButtonOutput: false,
        autoplay: true,
        controls: false,
        nav: false,
        gutter: 30,
        mouseDrag: true,
        responsive: {
          0: {
            items: 2,
          },
          600: {
            items: 2,
          },
          768: {
            items: 3,
          },
        },
      });
    </script>
  </body>
</html>
