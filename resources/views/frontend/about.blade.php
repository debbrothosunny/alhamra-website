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
        <div class="container">
            <h1 class="logo">
            @foreach($site_setting as $postData)
              <a href="home.html"><img src="{!! asset('assets/img/uploaded/'.$postData->logo) !!}" alt="logo"/></a>
              @endforeach 
            </h1>
          <ul class="nav">
            <li><a href="{{route('home_index')}}">Home</a></li>
            <li><a href="{{route('about_index')}}" class="active">About</a></li>
            <li><a href="{{route('service_index')}}">Service</a></li>
            <li><a href="{{route('blog_single')}}">Blog</a></li>
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
                ><img src="image/Al-hamra-logo-01-1-300x268.png" alt="logo"
              /></a>
            </div>
            <i class="fa-solid fa-xmark" id="menu-close"></i>
          </div>

          <ul class="nav">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html" class="active">About</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </header>
    <!-- page header -->
    <div
    @foreach($about_header as $postData)
      class="page-header"
      
      style="
        background: linear-gradient(#00000088, #00000088),
          url({!! asset('assets/img/uploaded/'.$postData->bg_image) !!});"
    > 
      <h2>{{$postData->title}}</h2>
    @endforeach
    </div>
    <!-- page header end -->

    <!-- about top  -->

    <div class="about-top">
      <div class="container">
        <div class="about-top-content">
          @foreach($our_qualities as $postData)
          <div class="about-top-left">
            <img
              src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
              alt="img"
            />
          </div>
          <div class="about-top-right">
         
            <h3>{{$postData->title}}</h3>
            <p>
            {{$postData->description}}
            </p>
            <ul>
              <li>
                <i class="fas fa-chevron-down"></i>
                <span>{{$postData->title_1}}</span>
              </li>
              <li>
                <i class="fas fa-chevron-down"></i>
                <span>{{$postData->title_2}}</span>
              </li>
            </ul>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- about top  end -->

    <!-- about cta  -->

    <div class="about-cta">
      <div class="container">
        <div class="header-center">
          @foreach($why_choose_us_title as $postData)
          <h4>{{$postData->title}}</h4>
          <h2>{{$postData->sub_title}}</h2>
          @endforeach
        </div>
        <div class="about-cta-content">
        @forelse($why_choose_us_content as $postData)
          <div class="about-cta-box">
            
            <div class="cta-icon"><i class="fas fa-hotel"></i></div>
            <h4>{{$postData->title}}</h4>
            <p>{{$postData->description}}</p>
            
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- about cta  end -->

    <!-- our pm  -->

    <div class="our-pm">
      <div class="container">
        <div class="our-pm-content">
        @foreach($our_plan as $postData)
          <div class="our-pm-box">
            <div class="our-pm-text">
              <h2>{{$postData->title}}</h2>
              <p>
              {{$postData->description}}
              </p>
            </div>
            <div class="our-pm-img">
              <img
                src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
                alt="img"
              />
            </div>
          </div>
          <div class="our-pm-box">
            <div class="our-pm-img">
              <img
                src="{!! asset('assets/img/uploaded/'.$postData->image) !!}"
                alt="img"
              />
            </div>
            <div class="our-pm-text our-pm-text-right">
              <h2>{{$postData->title}}</h2>
              <p>
              {{$postData->description}}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- our pm  end -->

    <!-- Management  Start -->
<!-- FrontendController  -->
    





 <!-- our portfolios -->

 <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
/* image width */
img{
    width: 100%;
}


/* portfolio hero section */

.portfolio_hero{
    width: 100%;
    height: 450px;
    padding-bottom: 150px;
    margin-top: -150px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    background: url(images/portfolios-min.jpg);
    background-size: cover;
    background-position: center;
    position: relative;
}
.portfolio_hero::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgb(0, 0, 0,0.5);
    top: 0;
    z-index: 1;
    
}
.portfolio_hero a{
    text-decoration: none;
    font-size: 30px;
    color: #fff;
    z-index: 111;
    /* position: absolute; */
}

#portfolios{
    position: relative;
    padding: 50px 0px;
}

#portfolios h2 {
    font-size: 18px;
    line-height: 25px;
    letter-spacing: 0.1px;
    color: #000;
    text-transform: capitalize;
    font-family: arial;
    font-weight: 500;
}
#portfolios p.passage{
    max-width: 700px;
    margin: 0 auto;
    margin-top: 10px;
    font-size: 15px;
    line-height: 23px;
    color: #000;
}
#portfolios .portfolio_card_box{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;

}
#portfolios .portfolio_card_box .items{
    margin: 10px 0;
    width: 24%;
    position: relative;
    display: block;
    overflow: hidden;
    outline: none;
    transition: 0.4s all ease-in-out;
}



#portfolios .items .hover_content{
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgb(0, 127, 249,0.5);
    top: 0;
    left: 0;
    box-sizing: border-box;
    /* border: 5px solid #B3043D; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    visibility: hidden;
    opacity: 0;
    /* transform: rotate(60deg); */
    transform: scale(0.5);
    transition: 0.4s all ease-in-out;
}
#portfolios .items:hover .hover_content{
    display: flex;
    /* transform: rotate(0deg); */
    transform: scale(1);
    visibility: visible;
    opacity: 1;
    transition: 0.4s all ease-in-out;
}
#portfolios .items .hover_content h2{
    font-size: 15px;
    line-height: 50px;
    letter-spacing: 0.5px;
    color: #fff;
    margin-bottom: 10px;
}
#portfolios .items .hover_content a{
    text-decoration: none;
    background: #fff;
    font-size: 15px;
    letter-spacing: 0.5px;
    color: #000;
    border-radius: 50px;
    padding: 10px 25px;
    transition: 0.2s;

}
#portfolios .items .hover_content a:hover{
    background: #000;
    color:#fff;
}
#portfolios .portfolio_card_box .items img{
    width: 70%;
    height: 30%;
    position: relative;
    object-fit: cover;
    display: block;
}
#portfolios .portfolio_card_box .items .content_box{
    background: var(--brand-color);
    width: 70%;
    height: 70%;
    padding: 20px;
    position: absolute;
    display: none;
}
#portfolios .container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#portfolios  .filter_menu{
    margin-bottom: 20px;
    margin-top: 30px;
}

.filter_menu button {
    border: none;
    outline: none;
    background: #c9baba40;
    padding: 8px 10px;
    color: black;
    font-size: 13px;
    font-weight: 500;
    margin: 8px;
    text-transform: capitalize;
    transition: 0.3s all ease-in-out;
}
.filter_menu button.active,
.filter_menu button:hover{
    background: var(--brand-color);
    color: red;
}

.items{
    transition: 0.5s all ease-in-out;
}

/* =======responsive design code here======== */

/* // Medium devices (tablets, less than 992px) */
@media (min-width: 1000px){
    #portfolios .items .hover_content h2{
        font-size: 25px;
        line-height: 50px;
        letter-spacing: 0.5px;
        color: #fff;
        margin-bottom: 5px;
    }
}

@media (max-width: 991.98px) {
    #portfolios .items .hover_content h2{
        font-size: 17px;
        line-height: 50px;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }
    #portfolios .items .hover_content a{
        text-decoration: none;
        background: #fff;
        font-size: 14px;
        letter-spacing: 0.5px;
        color: #000;
        border-radius: 50px;
        padding: 10px 15px;
    
    }
}

/* // Small devices (landscape phones, less than 768px) */
@media (max-width: 767.98px) {
    #portfolios .portfolio_card_box .items{
        width: 46%;
    }
}

@media (max-width: 575.98px) { 
    #portfolios .portfolio_card_box .items{
        width: 100%;
    }
    #portfolios .items .hover_content h2{
        font-size: 17px;
        line-height: 50px;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }
    #portfolios .items .hover_content a{
        text-decoration: none;
        background: #fff;
        font-size: 14px;
        letter-spacing: 0.5px;
        color: #000;
        border-radius: 50px;
        padding: 10px 15px;
    
    }
    #portfolios  .filter_menu button{
        padding: 10px 15px;
        font-size: 14px;
    }
    #portfolios h2{
        font-size: 30px;
        line-height: 50px;
        letter-spacing: 0.5px;
    }
}
@media (max-width: 400px) { 
    #portfolios h2{
        font-size: 22px;
        line-height: 50px;
        letter-spacing: 0.5px;
    }
    #portfolios .items .hover_content h2{
        font-size: 17px;
        line-height: 50px;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }
    #portfolios .items .hover_content a{
        text-decoration: none;
        background: #fff;
        font-size: 14px;
        letter-spacing: 0.5px;
        color: #000;
        border-radius: 50px;
        padding: 10px 15px;
    
    }

}
 </style>
 <section id="portfolios">
            <div class="container">
                <div class="heading">
                @foreach($our_management_title as $postData)
                  <h2>{{$postData->title}}</h2>
                @endforeach
                </div> 
                <div class="filter_menu">
                    @foreach($new_deadline_date as $postData)
                    <button data-filter="{{$postData->id}}">{{$postData->category_name}}</button>
                    @endforeach
                </div>
                <div class="portfolio_card_box">
                    @foreach($new_deadline_content as $postData)
                    <div class="items {{$postData->category_id}}">
                        <img src="{!! asset('assets/img/uploaded/'.$postData->image)!!}" alt="">
                            <h2 class="title">{{$postData->name}}</h2>
                            <a href="#" target="_blank">{{$postData->position}}</a>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    <!-- Management  end -->
    
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


 




    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="{{asset('/assets/frontend/js/app.js')}}"></script>


    <script>
  $(document).ready(function(){
      // filter button
      $('.filter_menu button').click(function(){
          const value = $(this).attr('data-filter');
          if(value == 'all'){
              $('.portfolio_card_box .items').show('1000').css({"transform":"scale(1)" , "transition" : "0.3s"});
          }
          else{
              $('.portfolio_card_box .items').not("." + value ).hide('1000').css({"transform":"scale(0.5)" , "transition" : "0.3s"});
              $('.portfolio_card_box .items').filter("." + value ).show('1000').css({"transform":"scale(1)" , "transition" : "0.3s"});
          }
      });

      // filter button addClass and removeClass script
        $('.filter_menu button').click(function(){
          $('button').removeClass('active');
          $(this).addClass('active');
        });
      
    });
</script>
  </body>
</html>
