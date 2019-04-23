<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="/js/app.js"></script>
    <title>@yield('title',config('app.name'))</title>
</head>
<body>

<div id="booking" class="section">
    @include('Anasayfaparts.nav')
    @include('Anasayfaparts.alert')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
    @yield('footer')
</div>

</body>
</html>