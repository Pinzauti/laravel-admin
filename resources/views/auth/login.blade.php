<!doctype html>
<html class="fixed dark">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="eSportsCMS" />
    <meta name="description" content="esportscms">
    <meta name="author" content="esportscms.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/admin/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/admin/font-awesome/css/font-awesome.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin/skins/default.css') }}" />

    <!-- Head Libs -->
    <script src="{{ asset('vendor/admin/modernizr/modernizr.js') }}"></script>

</head>
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="{{ asset('images/admin/logo.png') }}" height="54" alt="Porto Admin" />
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
            </div>
            <div class="panel-body">
                <p>
                    Choose a single sign on below. If you have an account with us you will be logged in, if now we
                    will create an account for you.
                </p>

                <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                    <span>Single Sign In</span>
                </span>
                <div class="mb-xs text-center">
                    <a class="btn btn-facebook mb-md ml-xs mr-xs" href="{{ url('/login/facebook') }}">Connect with <i class="fa fa-facebook"></i></a>
                    <a class="btn btn-twitter mb-md ml-xs mr-xs" href="{{ url('/login/twitter') }}">Connect with <i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright {{ \Carbon\Carbon::today()->year }} <a href="http://esportscms.com">eSportsCMS.com</a>. All Rights Reserved.</p>
    </div>
</section>
<!-- end: page -->

<!-- Vendor -->

<script src="{{ asset('vendor/admin/bootstrap/js/bootstrap.js') }}"></script>

@include('admin.layouts.flash')
</body>
</html>


