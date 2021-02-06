<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>Devolve-ME!</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#about">sobre</a></li>
                    <li><a href="#services">serviços</a></li>
                    <li class="drop-down"><a href="#">Objecto</a>
                        <ul>
                            <li><a href="{{ route('site.objecto.form') }}">Registo</a></li>
                            <li><a href="{{ route('site.objecto.lista') }}">Lista</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Estatística</a>
                        <ul>
                            <li class="drop-down"><a href="#">Objectos</a>
                                <ul>
                                    <li><a href="#">Encontrados</a></li>
                                    <li><a href="#">Perdidos</a></li>
                                    <li><a href="#">Roubados</a></li>
                                    <li><a href="#">Entregues</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 1</a></li>
                        </ul>
                    </li>
                    <li><a href="#team">equipa</a></li>
                    <li><a href="#contact">contacto</a></li>
                    <li class="get-started"><a href="#about">Explore</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div><!-- End Header Container -->
    </div>
</header>