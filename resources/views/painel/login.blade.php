<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Devolve-ME!</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Custom Theme Style -->
    <link href="{{ url('painel/build/css/authentication.css') }}" rel="stylesheet">


</head>

<body>
    <div class="background-wrap">
        <div class="background"></div>
    </div>

    <form id="accesspanel" action="{{ route('postLogin') }}" method="post">
        {{ csrf_field() }}

        <h1 id="litheader">Login</h1>
        <div class="inset">
            <p>
                <input type="text" value="admin@gmail.com" name="email" id="email" placeholder="Email">
            </p>
            <p>
                <input type="password" value="123456" name="password" id="password" placeholder="Senha">
            </p>
            
            <input class="loginLoginValue" type="hidden" name="service" value="login" />
        </div>
        <p class="p-container">
            <input type="submit" name="Login" id="go" value="Entrar">
        </p>
    </form>

    <!-- jQuery -->
    <script src="{{ url('painel/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
        < script >
            $(document).ready(function () {

                var state = false;

                //$("input:text:visible:first").focus();

                $('#accesspanel').on('submit', function (e) {

                    e.preventDefault();

                    state = !state;

                    if (state) {
                        document.getElementById("litheader").className = "poweron";
                        document.getElementById("go").className = "";
                        document.getElementById("go").value = "Initializing...";
                    } else {
                        document.getElementById("litheader").className = "";
                        document.getElementById("go").className = "denied";
                        document.getElementById("go").value = "Access Denied";
                    }

                });

            });

    </script>
</body>

</html>
