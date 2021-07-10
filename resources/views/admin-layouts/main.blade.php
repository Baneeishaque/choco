<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!--  <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
        <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
        <meta name="author" content="Themesbox"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Start CSS -->   
        @yield('style')
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href="/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/datepicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css">

        

     
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/pnotify/css/pnotify.custom.min.css" rel="stylesheet" type="text/css">
    <style>
        .se-pre-con{
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: #117A65;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .spinner-grow {
            color: #ffffff !important;
        }
    </style>
    <!-- <script>
        document.onreadystatechange = function() { 
                if (document.readyState !== "complete") { 
                    setTimeout(function(){ 
                        document.querySelector("body").style.visibility = "hidden"; 
                        document.querySelector(".se-pre-con").style.display = "visible"; 
                    }, 1000);
                } else { 
                    setTimeout(function(){ 
                        document.querySelector(".se-pre-con").style.display = "none"; 
                        document.querySelector("body").style.visibility = "visible"; 
                    }, 1000);
                } 
            }; 
    </script> -->
        <!-- End CSS -->
    </head>
    <body class="vertical-layout">
        <!-- <div class="se-pre-con">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
    <!-- <body class="horizontal-layout"> -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" id="app-url" value="{{URL::to('/')}}">

        <!-- Start Infobar Setting Sidebar -->
        <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="{{ asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-settings-sidebar-body">
                <div class="custom-mode-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="infobar-settings-sidebar-overlay"></div>
        <!-- End Infobar Setting Sidebar -->
        <!-- Start Containerbar -->
        <!-- class="container-fluid" -->
        <div id="containerbar">
            <!-- Start Rightbar -->
            @include('admin-layouts.leftbar')          
            @include('admin-layouts.rightbar')          
            @yield('content')

            <!-- End Rightbar --> 
            <!-- Modal -->
            
      
            <!-- End Modal -->
        </div>
        <!-- End Containerbar -->
        <!-- Start JS -->    
        
        <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <!-- <script src="{{ asset('assets/js/horizontal-menu.js') }}"></script>  -->
        <script src="{{ asset('assets/js/vertical-menu.js') }}"></script> 
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script> 
        <script src="{{ asset('assets/js/moment.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

        <script src="{{ asset('assets/js/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker.en.js') }}"></script>
        <script src="{{ asset('assets/js/custom-form-datepicker.js') }}"></script>

        <script src="/assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js"></script>
        <script src="/assets/js/custom/custom-form-inputmask.js"></script>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
       <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

        <script src="/assets/plugins/pnotify/js/pnotify.custom.min.js"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

        @yield('script')
       
        <!-- Core JS -->

        <script src="{{ asset('assets/js/core.js') }}"></script> 
        <!-- End JS -->
        <script>
            
            var $html = $("html");
            var dark_data   = localStorage.getItem("theme_dark");
            if(dark_data == "1")
            {
                $('#toggle-switch').trigger('click');
                $html.addClass("dark-mode");
            }
            // dark mode switch
            $("#toggle-switch").on("change", function() {
                if (this.checked) {
                    localStorage.setItem("theme_dark", "1");
                    $html.addClass("dark-mode");
                } else {
                    localStorage.setItem("theme_dark", "0");
                    $html.removeClass("dark-mode");
                }
            });
            
            @yield('pagescripts')
        </script>
    </body>
</html>    
