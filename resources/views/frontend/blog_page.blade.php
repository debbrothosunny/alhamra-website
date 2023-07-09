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
    
    <link rel="stylesheet" href="{{asset('/assets/toastr/toastr.min.css')}}"/>
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
            <li><a href="{{route('service_index')}}">Service</a></li>
            <li><a href="{{route('blog_single')}}" class="active">Blog</a></li>
            <li><a href="{{route('contact_index')}}">Contact</a></li>
          </ul>
          <div class="nav-btn">
            <a href="#">Explore More</a>
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
            <li><a href="{{route('home_index')}}">Home</a></li>
            <li><a href="{{route('about_index')}}">About</a></li>
            <li><a href="{{route('service_index')}}">Service</a></li>
            <li><a href="{{route('blog_single')}}" class="active">Blog</a></li>
            <li><a href="{{route('contact_index')}}">Contact</a></li>
          </ul>
        </div>
        @endforeach
      </div>
    </header>

    <!-- blog page  -->

    <div class="blog-page">
      <div class="container">
        <div class="blog-page-content">
          <div class="blog-page-box">
            
            <div class="blog-page-img"> 
            
              <img
                src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
                alt="blog"/>
           
            </div>
           
            <div class="blog-page-text">
              <h3>{{$postData->title}}</h3>
              <div class="blog-small">
                <a>{{$post->CreatedBy->name}}</a>|
                <a>{{$post->CatName->category_name  ?? ''}}</a>
              </div>
              <p>{{$post->description_1}}</p>
              </div>
          </div>
          <div class="blog-controll">
            <a href="#"><i class="fa-solid fa-arrow-left"></i> Previous Post</a>
            <a href="#"> Next Post <i class="fa-solid fa-arrow-right"></i></a>
          </div>

<Style>
  .blog-comment-page {
  background: #fff;
  padding: 2.5rem 6.67rem 5.34rem;
  margin-bottom: 30px;
}

.blog-comment-header {
  font-size: 1.5rem;
  font-weight: 400;
  color: #4b4f58;
}

.blog-comment-profile {
  display: flex;
  align-items: center;
  margin: 50px 0 15px;
}

.blog-comment-profile img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: block;
  margin-right: 20px;
}
.blog-comment-profile .blog-comment-profile-text h4 {
  color: #0270b9;
  font-size: 0.8rem;
  font-weight: 700;
  margin-bottom: 0;
}
.blog-comment-profile small {
  color: #0270b9;
  font-size: 0.8rem;
  font-weight: 400;
}

.blog-comment-textarea p {
  line-height: 1.6rem;
  font-size: 1rem;
  color: #484c55;
  margin-bottom: 15px;
}

.blog-comment-reply a {
  display: block;
  text-align: right;
  font-size: 0.9rem;
  color: #0270b9;
}

.blog-comment-page h5 {
  line-height: 1.5;
  font-size: 1rem;
  color: #484c55;
  font-weight: 400;
}

.blog-comment-page form {
  margin-top: 20px;
  display: none;
}

.blog-comment-page form.active {
  display: block;
}

.blog-comment-page h4 {
  font-size: 1.5em;
  color: #4b4f58;
  font-weight: 400;
  margin-bottom: 5px;
}

.blog-comment-page h4 span {
  font-size: 0.9rem;
  color: #0270b9;
  cursor: pointer;
  margin-left: 10px;
}
.blog-comment-page p {
  margin-bottom: 1.6em;
  line-height: 1.6;
  color: #4b4f58;
}
</Style>

      <div class="blog-comment-page">
         
            <h3 class="blog-comment-header">
              0 thoughts on “{{$postData->title}}?”
            </h3>
            @foreach ($blog_comment as $postData)
            <div class="blog-comment-profile">
              <div class="blog-comment-profile-img">
                <img
                  src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                  alt="profile"
                />
              </div>

              <div class="blog-comment-profile-text">
              
                
                <h4>{{$postData->name}}</h4>
                <small>{{ $postData->created_at->format('M d, Y')}}</small>
               
              </div>
              
            </div>
            <div class="blog-comment-textarea">
              <p>
              {!!$postData->comment!!}
              </p>
            </div>
            <!-- <div class="blog-comment-reply">
              <a href="#">Reply</a>
            </div> -->

            <h5>our comment is waiting moderation.</h5>
            <div class="blog-comment-reply-form">
              <form action="{{route('comment')}}" method="post">
                @csrf
                <h4>
                  Reply to {{$postData->name}}
                  <span class="reply-cancel-btn">Cancel Reply</span>
                </h4>
                <p>
                  Your email address will not be published. Required fields are
                  marked *
                </p>

                <div class="input-comment">
                  <textarea
                    name="comment"
                    id="comment"
                    placeholder="Type Here..."
                  ></textarea>
                </div>
                <div class="input-comment-flex">
                  <input type="text" name="name" value="{{$postData->name}}" id="name" placeholder="Name*" />
                  <input type="email" name="email" value="{{$postData->email}}" id="email" placeholder="Email*"/>
                </div>
                <div class="input-check">
                  <input type="checkbox" name="check" id="check" />
                  <label for="check"
                    >Save my name, email, and website in this browser for the
                    next time I comment.</label
                  >
                </div>
                <button type="submit">
                  Post Comment <i class="fa-solid fa-arrow-right"></i>
                </button>
              </form>
            </div>
            @endforeach
          </div>


          <div class="blog-comment-form">
          
            <h4>Leave a Comment</h4>
            <p>
            {!!Str::limit($postData->comment,'30', '....')!!}
            </p>
            @if(Session::has('success'))
                <div id="flashmessage" style="color:green;" class="alert-success p-3 mb-3">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div  id="flashmessage" class="alert-danger p-3 mb-3">{{Session::get('fail')}}</div>
            @endif
            <form action="{{route('comment')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="input-comment">
                <textarea name="comment" id="comment" placeholder="Type Here..."></textarea>
                <span class="text-danger">@error('comment'){{$message}}@enderror</span>
              </div>

              <div class="input-comment-flex">
                <input type="text" name="name" id="name" placeholder="name"/>
                <span class="text-danger">@error('name'){{$message}}@enderror</span>
              </div>

              <div class="input-comment-flex">
                <input type="email" name="email" id="email" placeholder="Email"/>
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
              </div>
              <button type="submit">
                Post Comment <i class="fa-solid fa-arrow-right"></i>
              </button>
            </form>
            
          </div>
        </div>
      
      </div>
    </div>
    <!-- blog page end -->

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
    <script src="{{asset('/assets/frontend/js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

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
  const blogForm = document.querySelector(".blog-comment-page form");
const blogOpenBtn = document.querySelector(".blog-comment-reply a");
const blogCloseBtn = document.querySelector(".blog-comment-page h4 span ");
const mainBlogForm = document.querySelector(".blog-comment-form");

blogOpenBtn.addEventListener("click", (e) => {
  e.preventDefault();
  blogForm.classList.add("active");
  mainBlogForm.style.display = "none";
});
blogCloseBtn.addEventListener("click", (e) => {
  blogForm.classList.remove("active");
  mainBlogForm.style.display = "block";
});
</script>

<!-- ------------------------Toastr Script------------------ -->

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
