<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Devolve-ME!</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ url('painel/authentication/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ url('painel/authentication/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ url('painel/authentication/vendors/images/favicon-16x16.png') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('painel/authentication/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('painel/authentication/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('painel/authentication/vendors/styles/style.css') }}">

        <!-- Font Awesome -->
    <link href="{{ url('painel/vendors/font-awesome/css/font-awesome.min.css') }}"
    rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');

    </script>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <h4 class="site_title"><i class="fa fa-paw"></i> Devolve-ME!</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ url('painel/authentication/vendors/images/login-page-img.png') }}"
                        alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login</h2>
                        </div>
                        <form action="{{ route('postLogin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="input-group custom">
                                <input type="email" class="form-control form-control-lg" value="admin@gmail.com"
                                    name="email" placeholder="Email">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" value="123456"
                                    placeholder="Senha" name="password">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Entrar">
                                        <!--

										<a class="btn btn-primary btn-lg btn-block" href="index.html">Entrar</a>
										-->

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="{{ url('painel/authentication/vendors/scripts/core.js') }}"></script>
    <script src="{{ url('painel/authentication/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ url('painel/authentication/vendors/scripts/process.js') }}"></script>
    <script src="{{ url('painel/authentication/vendors/scripts/layout-settings.js') }}">
    </script>
</body>

</html>
