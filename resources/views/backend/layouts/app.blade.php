<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <title>@yield('meta_title') | {{ businessSetting()->business_name }}</title>
=======
    <title>{{ businessSetting()->business_name }}</title>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
<<<<<<< HEAD

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/icofont/css/icofont.css')}}">

=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/feather/css/feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/jquery.mCustomScrollbar.css') }}">
<<<<<<< HEAD
    @yield('styles')
=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('backend.inc.nav-bar')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('backend.inc.side-bar')
<<<<<<< HEAD
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>@yield('page_name')</h4>
                                                    <span>@yield('page_description')</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    @yield('breadcrumb_item')
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
=======
                @yield('content')
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
            </div>
        </div>
    </div>
</div>


<!-- Required Jquery -->
<<<<<<< HEAD
{{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}

<script type="text/javascript" src="{{ asset('backend/plugins/jquery/js/jquery.min.js') }}"></script>
=======
{{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"> --}}
</script><script type="text/javascript" src="{{ asset('backend/plugins/jquery/js/jquery.min.js') }}"></script>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
<script type="text/javascript" src="{{ asset('backend/plugins/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/plugins/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('backend/plugins/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('backend/plugins/modernizr/js/modernizr.js') }}"></script>
<<<<<<< HEAD

=======
<!-- Chart js -->
<script type="text/javascript" src="{{ asset('backend/plugins/chart.js/js/Chart.js') }}"></script>
<!-- amchart js -->
<script src="{{ asset('backend/assets/pages/widget/amchart/amcharts.js') }}"></script>
<script src="{{ asset('backend/assets/pages/widget/amchart/serial.js') }}"></script>
<script src="{{ asset('backend/assets/pages/widget/amchart/light.js') }}"></script>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
<script src="{{ asset('backend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('backend/assets/js/vartical-layout.min.js') }}"></script>
<<<<<<< HEAD
<script type="text/javascript" src="{{ asset('backend/assets/js/script.min.js') }}"></script>
@yield('scripts')
=======
<script type="text/javascript" src="{{ asset('backend/assets/pages/dashboard/custom-dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/assets/js/script.min.js') }}"></script>
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
</body>

</html>
