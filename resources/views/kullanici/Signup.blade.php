<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V9</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="/image/png" href="/icon/favicon.ico"/>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-login100" id="booking">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form class="login100-form validate-form" role="form" method="post" action="{{route('signup')}}">
			{{csrf_field()}}
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
            <div for="ad" class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input class="input100" type="text" name="ad" id="ad" placeholder="Firsname">
                <span class="focus-input100"></span>
            </div>
            <div for="soyad" class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input class="input100" type="text" name="soyad" id="soyad" placeholder="Surname">
                <span class="focus-input100"></span>
            </div>
            <div for="email" class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input class="input100" type="text" name="email" id="email" placeholder="email">
                <span class="focus-input100"></span>
            </div>

            <div for="sifre" class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                <input class="input100" type="password" name="sifre" id="sifre" placeholder="password">
                <span class="focus-input100"></span>
            </div>
            <div for="sifre-tekrari"class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                <input class="input100" type="password" name="sifre-confirmation" id="sifretekrari" placeholder="Confirm Password">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Sign Up
                </button>
            </div>

            <div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
            </div>

            <div class="flex-c p-b-112">
                <a href="#" class="login100-social-item">
                    <i class="fa fa-facebook-f"></i>
                </a>

                <a href="#" class="login100-social-item">
                    <img src="/icon/icon-google.png" alt="GOOGLE">
                </a>
            </div>

            <div class="text-center">
                <a href="{{route('signin')}}" class="txt2 hov1">
                    Sign In
                </a>
            </div>
        </form>


    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/daterangepicker/moment.min.js"></script>
<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>

</body>
</html>