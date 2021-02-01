<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('main-title')</title>

    <!-- Bootstrap -->
    <link href="{{ url('painel/vendors/bootstrap/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('painel/vendors/font-awesome/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('painel/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- jQuery custom content scroller -->
    <link
        href="{{ url('painel/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}"
        rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="{{ url('painel/build/css/custom.min.css') }}" rel="stylesheet">

    @yield('css')


</head>

<body class="nav-md">
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    
    <!-- preloader area end -->
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" style="font-size: 1.3rem; " class="site_title"><i class="fa fa-paw"></i> <span id="main-title">Lost and Found</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ url('painel/production/images/img.jpg') }}" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bem-vindo,</span>
                            <h2>{{ $user_name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    @include('painel.partials.sidebar')
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Definições">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Ecrã Completo">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Bloquear">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Sair"
                            href="{{ route('logout') }}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            @include('painel.partials.navegation')
            <!-- /top navigation -->

            <!-- page content -->
            @yield('main-content')
            <!-- /page content -->

            <!-- footer content -->
            @include('painel.partials.footer')
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('painel/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- FastClick -->
    <script src="{{ url('painel/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('painel/vendors/nprogress/nprogress.js') }}"></script>
    <!-- jQuery custom content scroller -->
    <script
        src="{{ url('painel/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}">
    </script>


    <script src="{{ url('painel/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ url('painel/build/js/custom.min.js') }}"></script>

    <script>
        var preloader = $('#preloader');
        $(window).on('load', function () {
            setTimeout(function () {
                preloader.fadeOut('slow', function () {
                    $(this).remove();
                });
            }, 300)
        });

    </script>

    @yield('js')
</body>

</html>
