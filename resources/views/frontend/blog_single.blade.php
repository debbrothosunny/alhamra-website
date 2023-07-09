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
      @foreach ($footer as $postData)
        <div class="container">
          <div class="header-top-left">
            <i class="fa-solid fa-location-dot"></i>
            
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
         @forelse($site_setting as $postData)
        <div class="container">
          <h1 class="logo">
            <a href="home.html"><img src="{!! asset('assets/img/uploaded/'.$postData->logo) !!}" alt="logo"/></a>
          </h1>
          <ul class="nav">
            <li><a href="{{route('home_index')}}" class="active">Home</a></li>
            <li><a href="{{route('about_index')}}">About</a></li>
            <li><a href="{{route('service_index')}}">Service</a></li>
            <li><a href="{{route('blog_single')}}"class="active">Blog</a></li>  
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
            <li><a href="{{route('home_index')}}" class="active">Home</a></li>
            <li><a href="{{route('about_index')}}">About</a></li>
            <li><a href="{{route('service_index')}}">Service</a></li>
            <li><a href="{{route('blog_single')}}"class="active">Blog</a></li>  
            <li><a href="{{route('contact_index')}}">Contact</a></li>
          </ul>
        </div>
        @endforeach
      </div>
    </header>
    <!-- page header -->
    <div
    @foreach($blog_header as $postData)
      class="page-header"
      
      style="
        background: linear-gradient(#00000088, #00000088),
          url({!! asset('assets/img/uploaded/'.$postData->bg_image) !!});"
    >
      <h2>{{$postData->title}}</h2>
    @endforeach
    </div>
    
    <!-- page header end -->

    <!-- blog  -->

    <div class="blog">
      <div class="container">
        <div class="blog-content">
          @foreach($blog_content as $postData)
          <div class="blog-box">
            <div class="blog-img">
              <img
                src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
                alt="img"
              />
            </div>
            <div class="blog-text">
            
              <div class="blog-tag">
                <i class="fa-regular fa-folder"></i>
                <a href="#"> {{$postData->title}}</a>
              </div>
              <h3>{{$post->CatName->category_name  ?? ''}}</h3>
              <p>{!!Str::limit($postData->description_1,'100', '....')!!}</p>
              
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- blog  end -->
    
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
  </body>
</html>
