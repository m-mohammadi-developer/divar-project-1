<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
    <!--begin::Head-->
    <head>
        @section('head')
        <base href="">
        <meta charset="utf-8"/>
        <title>
            @if(isset($title))
                {{ $title }}
            @else 
                {{ 'بخش کاربری' }}
            @endif
        </title>
        <meta name="description" content="Updates and statistics"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <!--end::Fonts-->
        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Page Vendors Styles-->
        <!--begin::Global تم Styles(used by all pages)-->
        <link href="{{ asset('plugins/global/plugins.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/style.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Global تم Styles-->
        <!--begin::چیدمان تم ها(used by all pages)-->
        <!--end::چیدمان تم ها-->
        <link rel="shortcut icon" href="{{ asset('/media/logos/favicon.ico') }}"/>
        @show
    </head>
    <!--end::Head-->

    <!--begin::Body-->

<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white"
            id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
                <!--begin: Aside Container-->
                <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                    <!--begin::Logo-->
                    <a href="#" class="text-center pt-2">
                        <img src="{{ asset('media/logos/logo.png') }}" class="max-h-75px" alt="" />
                    </a>
                    <!--end::Logo-->

                    <!--begin::Aside body-->
                    <div class="d-flex flex-column-fluid flex-column flex-center">

                        @yield('form-section')

                    </div>
                    <!--end::Aside body-->

                   
                </div>
                <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->

            <!--begin::Content-->
            <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
                <!--begin::Title-->
                <div
                    class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                    <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">شگفتی ها</h3>
                    <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                        استراتژی محصول<br />
                        برنامه های وب
                    </p>
                </div>
                <!--end::Title-->

                <!--begin::Image-->
                <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                    style="background-image: url({{ asset('media/svg/illustrations/login-visual-2.svg') }});"></div>
                <!--end::Image-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->


    <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <!--begin::Global تم Bundle(used by all pages)-->
    <script src="{{ asset('plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js?v=7.0.6') }}"></script>
    <!--end::Global تم Bundle-->


    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/custom/login/login-general.js?v=7.0.6') }}"></script>
    <!--end::Page Scripts-->
    
</body>
<!--end::Body-->

    
</html>