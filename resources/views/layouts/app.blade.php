<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')-三分热度</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Moell" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('default/css/bootstrap.min.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('default/css/animate.css') }}">

    @yield('style')

    <link rel="stylesheet" href="{{ asset('default/css/index.css') }}">
    <script src="{{ asset('default/js/jQuery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('default/js/jweixin-1.2.0.js') }}"></script>


</head>

<body>
@inject('systemPresenter', 'App\Presenters\SystemPresenter')
<nav class="navbar navbar-default navbar-static-top">
    <div class="container" style="padding-top: 15px;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  href="{{ url("/") }}" ><img src="{{ asset('default/images/logo.png') }}" alt=""></a>
        </div>
        @include('default.navigation')
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
     
            @yield('header-text')
       
    </div>
</div>

<div class="container">
    <div class='row'>
        <div class='col-md-8' >
            @yield('content')
        </div>
        <div class='col-md-4' style="padding-right: 0;padding-left: 0;">
<!--             @include('default.author') -->

            <!-- @include('default.tag') -->

            @include('default.hot')

            
        </div>
    </div>
</div> <!-- /container -->


@include('default.footer')

<!-- jQuery -->
<script src="{{ asset('default/js/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('default/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->

<script src="{{ asset('default/js/index.js') }}"></script>

@yield('script')
</body>
</html>
