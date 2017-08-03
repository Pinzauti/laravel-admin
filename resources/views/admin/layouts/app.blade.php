<!doctype html>
<html class="fixed dark sidebar-left-xs">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>eSportsCMS | @yield('title')</title>
    <meta name="keywords" content="esports cms website" />
    <meta name="description" content="eSportsCMS is a Content Management System made by gamers for gamers.">
    <meta name="author" content="eSportsCMS.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('css/admin/vendor.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{!! asset('css/admin/theme.css') !!}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{!! asset('css/admin/skins/default.css') !!}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{!! asset('css/admin/theme-custom.css') !!}">

    <!-- Head Libs -->
    <script type="text/javascript" src="{!! asset('vendor/admin/modernizr/modernizr.js') !!}"></script>

    <!-- Remove #_=_ from url -->
    <script type="text/javascript">
        if (window.location.hash && window.location.hash == '#_=_') {
            if (window.history && history.pushState) {
                window.history.pushState("", document.title, window.location.pathname);
            } else {
                // Prevent scrolling by storing the page's current scroll offset
                var scroll = {
                    top: document.body.scrollTop,
                    left: document.body.scrollLeft
                };
                window.location.hash = '';
                // Restore the scroll offset, should be flicker free
                document.body.scrollTop = scroll.top;
                document.body.scrollLeft = scroll.left;
            }
        }
    </script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    @include('admin.layouts.header')
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        @include('admin.layouts.navigation')
        <!-- end: sidebar -->

        <section role="main" class="content-body">

            <header class="page-header">
                <h2>@yield('title')</h2>

                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="index.html">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Pages</span></li>
                        <li><span>Blank Page</span></li>
                    </ol>
                </div>
            </header>

            <!-- start: page -->
            @yield('content')
            <!-- end: page -->

        </section>
    </div>

</section>


<!-- Vendor -->

<script type="text/javascript" src="{{ asset('vendor/admin/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/vendor.js') }}"></script>
<script type="text/javascript" src="https://unpkg.com/vue@2.3.4"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>

<script type="text/javascript" src="{{ asset('vendor/admin/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/admin/jquery-datatables/media/js/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/admin/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/admin/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script type="text/javascript" src="{!! asset('js/admin/theme.js') !!}"></script>

<!-- Theme Custom -->
<script type="text/javascript" src="{!! asset('js/admin/theme.custom.js') !!}"></script>

<!-- Theme Initialization Files -->
<script type="text/javascript" src="{!! asset('js/admin/theme.init.js') !!}"></script>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('scripts')

@include('layouts.flash')

</body>
</html>
