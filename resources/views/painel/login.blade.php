<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Devolve-ME! - Login</title>

    <!-- Bootstrap -->
    <link href="{{ url('painel/vendors/bootstrap/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('painel/vendors/font-awesome/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('painel/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ url('painel/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('painel/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('postLogin') }}" method="post">
                        {{ csrf_field() }}

                        <h1>Faça o seu login</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" name="email" required="" value="admin@gmail.com">
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Senha" name="password" required="" value="123456">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit" href="index.html">Entrar</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <div class="clearfix"></div>
                            <br>

                            <div>
                                <p>&copy; <script>
                                        document.write(new Date().getFullYear());
                                    </script> - Todos os direitos reservados
                                </p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>


        </div>
    </div>
</body>

</html>
