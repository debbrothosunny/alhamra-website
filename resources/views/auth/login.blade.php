<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
        @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

        /* End Fonts */
        /* Start Global rules */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* End Global rules */

        /* Start body rules */
        body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;

            font-family: 'Vibur', cursive;
            /*   the main font */
            font-family: 'Abel', sans-serif;
            opacity: .95;
            /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
        }



        /* |||||||||||||||||||||||||||||||||||||||||||||*/
        /* //////////////////////////////////////////// */




        /* End body rules */

        /* Start form  attributes */
        form {
            width: 450px;
            min-height: 500px;
            height: auto;
            border-radius: 5px;
            margin: 2% auto;
            box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
            padding: 2%;
            background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
        }

        /* form Container */
        form .con {
            display: -webkit-flex;
            display: flex;

            -webkit-justify-content: space-around;
            justify-content: space-around;

            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;

            margin: 0 auto;
        }

        .text{
            color:red;
            font-size:25px;
            font-weight:bold;
        }

        /* the header form form */
        header {
            margin: 2% auto 10% auto;
            text-align: center;
        }

        /* Login title form form */
        header h2 {
            font-size: 250%;
            font-family: 'Playfair Display', serif;
            color: #3e403f;
        }

        /*  A welcome message or an explanation of the login form */
        header p {
            letter-spacing: 0.05em;
        }



        /* //////////////////////////////////////////// */
        /* //////////////////////////////////////////// */


        .input-item {
            background: #fff;
            color: #333;
            padding: 14.5px 0px 15px 9px;
            border-radius: 5px 0px 0px 5px;
        }



        /* Show/hide password Font Icon */
        #eye {
            background: #fff;
            color: #333;

            margin: 5.9px 0 0 0;
            margin-left: -20px;
            padding: 15px 9px 19px 0px;
            border-radius: 0px 5px 5px 0px;

            float: right;
            position: relative;
            right: 1%;
            top: -.2%;
            z-index: 5;

            cursor: pointer;
        }

        /* inputs form  */
        input[class="form-input"] {
            width: 240px;
            height: 50px;

            margin-top: 2%;
            padding: 15px;

            font-size: 16px;
            font-family: 'Abel', sans-serif;
            color: #5E6472;

            outline: none;
            border: none;

            border-radius: 0px 5px 5px 0px;
            transition: 0.2s linear;

        }

        input[id="txt-input"] {
            width: 250px;
        }

        /* focus  */
        input:focus {
            transform: translateX(-2px);
            border-radius: 5px;
        }

        /* //////////////////////////////////////////// */
        /* //////////////////////////////////////////// */

        /* input[type="text"] {min-width: 250px;} */
        /* buttons  */
        button {
            display: inline-block;
            color: #252537;

            width: 280px;
            height: 50px;

            padding: 0 20px;
            background: #fff;
            border-radius: 5px;

            outline: none;
            border: none;

            cursor: pointer;
            text-align: center;
            transition: all 0.2s linear;

            margin: 7% auto;
            letter-spacing: 0.05em;
        }

        /* Submits */
        .submits {
            width: 48%;
            display: inline-block;
            float: left;
            margin-left: 2%;
        }

        /*       Forgot Password button FAF3DD  */
        .frgt-pass {
            background: transparent;
        }

        /*     Sign Up button  */
        .sign-up {
            background: #B8F2E6;
        }


        /* buttons hover */
        button:hover {
            transform: translatey(3px);
            box-shadow: none;
        }

        /* buttons hover Animation */
        button:hover {
            animation: ani9 0.4s ease-in-out infinite alternate;
        }
        .log-in{
            background: red;
            color: #fff;
        }
        @keyframes ani9 {
            0% {
                transform: translateY(3px);
            }

            100% {
                transform: translateY(5px);
            }
        }
    </style>
</head>

<body>
    <div class="overlay">
        <!-- LOGN IN FORM by Omar Dsoky -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!--   con = Container  for items in the form-->
            <div class="con">
                <!--     Start  header Content  -->
                <header class="head-form">
                    <img src="{{asset('/assets/frontend/image/logo.png')}}" alt="img" width="200" height="200" />
                    <!-- <h2>Log In</h2> -->
                    <!--     A welcome message or an explanation of the login form -->
                    <p class="text">Welcome To Alhamra International</p>
                </header>
                <!--     End  header Content  -->
                <br>
                <div class="field-set">
                    <!--   user name -->
                    <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <!--   user name Input-->
                    <input id="email txt-input" type="email" placeholder="Enter Your Email" class="form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <p style="color:red;" class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                    <br>
                    <!--   Password -->
                    <span class="input-item">
                        <i class="fa fa-key"></i>
                    </span>
                    <!--   Password Input-->
                    <input id="password pwd" placeholder="Enter Password" type="password" class="form-input" name="password" required autocomplete="current-password">

                    @error('password')
                        <p style="color:red;" class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                    <br>
                    <!--        buttons -->
                    <!--      button LogIn -->
                    <button type="submit" class="log-in"> Log In </button>
                </div>
                <!--   End Conrainer  -->
            </div>
            <!-- End Form -->
        </form>
    </div>
    <script>
        function show() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'text');
        }

        function hide() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'password');
        }

        var pwShown = 0;

        document.getElementById("eye").addEventListener("click", function () {
            if (pwShown == 0) {
                pwShown = 1;
                show();
            } else {
                pwShown = 0;
                hide();
            }
        }, false);


    </script>
</body>

</html>