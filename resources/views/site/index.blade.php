<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Devolve.ME</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('site/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ url('site/assets/vendor/boxicons/css/boxicons.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('site/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('site/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ url('site/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('site/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('site/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany - v3.0.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('site.partials.modal')


    <!-- ======= Header ======= -->
    @include('site.partials.navegation')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1 style="line-height: 40px">Encontre seus pertences de maneira fácil e segura</h1>
            <h2></h2>
            <a href="{{ route('site.objecto.lista') }}" class="btn-get-started scrollto">Perdidos e
                Achados</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <h2>Sobre</h2>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <p>
                            A <strong>DEVOLVE.ME</strong> é um sistema que surge para facilitar o indivíduo a ter seus
                            bens, outrora extraviados, recuperados.
                        </p>
                        <p></p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Indivíduo A informa o que procura.</li>
                            <li><i class="ri-check-double-line"></i> Indivíduo B informa o que encontrou.</li>
                            <li><i class="ri-check-double-line"></i> A devolve.ME providencia a entrega do objecto.</li>
                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        @if(session('success'))
        <div id="add-success" data-aos="fade-in" data-aos-delay="200">
            <div class="card add-success-card">
                <div class="add-success-body">
                    <div class="card-header">
                        <h5>Objecto achado registado com sucesso!</h5>
                        <p class="icon-success"><i class="bx bx-check-circle" ></i> </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                        <span data-toggle="counter-up">{{ $estatistica['extraviado'] }}</span>
                        <p>Extraviados</p>
                    </div>

                    <div class="col-lg-4 col-md-6  col-sm-12 text-center">
                        <span data-toggle="counter-up">{{ $estatistica['achado'] }}</span>
                        <p>Achados</p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                        <span data-toggle="counter-up">{{ $estatistica['entregue'] }}</span>
                        <p>Entregues</p>
                    </div>

                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Serviços</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch" id="services-lost-object">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="{{ route('site.objecto.form') }}">Registo de Objectos
                                            Perdidos</a></h4>
                                    <p>Informe os objectos perdidos, dando informações extra acerca da última
                                        localização</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" id="services-robbed-object">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="{{ route('site.objecto.form') }}">Registo de Objectos
                                            Roubados</a></h4>
                                    <p>Informe os objectos roubados, dando informações extra acerca da última
                                        localização</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4" id="services-found-object">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <h4><a href="{{ route('site.objecto.form') }}">Registo de Objectos
                                            Achados</a></h4>
                                    <p>Receba uma recompensa por cada registo de objecto achado e entregue ao seu
                                        respectivo dono</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4" id="services-notification">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="icon"><i class="bx bx-phone-call"></i></div>
                                    <h4><a href="#services">Notificação</a></h4>
                                    <p>Clientes que pertencem os objectos achados, são notificados automaticamente pelo
                                        nosso serviço de notificações.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="destaques" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-left">
                    <h2>Em destaques</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active"><a
                                    href="{{ route('site.objecto.lista') }}" style="color: #fff">Ver
                                    todos</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container row-cols-1 row-cols-md-3" data-aos="fade-up" data-aos-delay="200">

                    @foreach($listaObjecto as $objecto)
                        <div class="col-lg-4 col-md-6 portfolio-item col mb-4">
                            <div class="portfolio-wrap card h-100">
                                <img src="{{ url("storage/objectos/". $objecto['fotografia']. "") }}"
                                    class="img-fluid card-img-top" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ Str::ucfirst($objecto['estado']) }}</h4>
                                    <p>{{ $objecto['categoria'] }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url("storage/objectos/". $objecto['fotografia']. "") }}"
                                            data-gall="portfolioGallery" class="venobox"
                                            title="{{ $objecto['categoria'] }} {{ $objecto['id'] }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('site.objecto.visualiza', $objecto['id']) }}"
                                            title="Mais Detalhes"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content-found-card">
                                    <h5 class="card-title">{{ Str::ucfirst($objecto['categoria']) }}</h5>
                                    <h5 class="card-subtitle">
                                        {{ $objecto['provincia'] }}, {{ $objecto['municipio'] }}</h5>
                                    <p class="card-text">{{ $objecto['descricao']  }}</p>
                                </div>
                                <div class="button-found-card">
                                    <p class="card-text obj-achado"
                                    data-objecto="{{ $objecto['id'] }}"><small><i
                                            class="bx bx-check"></i> Achei</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Testemunhos</h2>
                        </div>
                    </div>
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <div class="owl-carousel testimonials-carousel">

                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('site/assets/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>

                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('site/assets/img/testimonials/testimonials-2.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>

                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('site/assets/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>

                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('site/assets/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>

                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('site/assets/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Fale conosco</h2>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" allowfullscreen></iframe>
                        <div class="info mt-4">
                            <i class="icofont-google-map"></i>
                            <h4>Localização:</h4>
                            <p>Luanda, Cacuaco - Centralidade do Sequele</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>devolve.me@devolveme.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="icofont-phone"></i>
                                    <h4>Ligar:</h4>
                                    <p>(+244) 929123444</p>
                                </div>
                            </div>
                        </div>

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome"
                                        data-rule="minlen:4" data-msg="Por favor, entre com pelo menos 4 caracteres" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                        data-rule="email" data-msg="Por favor, entre com um email válido" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Assunto" data-rule="minlen:4"
                                    data-msg="Por favor, entre com pelo menos 8 caracteres" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="2" data-rule="required"
                                    data-msg="Por favor, escreva algo para nós" placeholder="Mensagem" maxlength="120"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Carregando ...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Mensagem enviada. Obrigado!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('site.partials.footer')

    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('site/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ url('site/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('site/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/aos/aos.js') }}"></script>

    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $(".texte").on('click', function (event) {
                console.log('você clicou')
                event.preventDefault();
                window.location.hash = ''
            })
        });

        setTimeout(() => {
            document.querySelector('#add-success').style.display = 'none'
        }, 6000);

    </script>

    <!-- Template Main JS File -->
    <script src="{{ url('site/assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 3000, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });



        /* CLicar na opção achei*/
        var numItem = document.getElementsByClassName('obj-achado');

        for (var i = 0; i < numItem.length; i++) {
            numItem[i].addEventListener('click', function (e) {
                var IDobjecto = e.target.dataset.objecto
                var chat = document.getElementById('chat');
                chat.style.display = "block";

                /* Quando clicado no registar da modal */
                var formChat = document.getElementById('form-registar-modal');
                formChat.addEventListener('submit', function (e) {
                    e.preventDefault();

                    let nome = $('#nome-modal').val();
                    let telefone = $('#telefone-modal').val();
                    let descricao = $('#descricao-modal').val();

                    /* Aqui entra o AJAX */
                    $.ajax({
                        url: "/objectos/achado-por-pessoa",
                        type:"POST",
                        data:{
                            "_token": "{{ csrf_token() }}",
                            nome: nome,
                            telefone: telefone,
                            descricao: descricao,
                            idObjecto: IDobjecto
                        },
                        success:function(response){
                            document.location.reload(true);
                        },
                    });
                })

            })
        }

        /* CLicar no botao close da modal */
        var chat = document.getElementById('close-chat');
        chat.addEventListener('click', function () {
            var chat = document.getElementById('chat');
            chat.style.display = "none";
        });

        /* Apagar o placeholder do textarea */
        var textareaOBJ = document.querySelector('#descricao-modal');
        textareaOBJ.addEventListener('click', function (e) {
            /* Apagar o placeholder*/
            if (e.target.value == e.target.defaultValue) {
                e.target.innerHTML = "";
            }
        });

        /* Colocar o placeholder se o campo estiver vazio*/
        textareaOBJ.addEventListener('blur', function (e) {
            /* Colocar o placeholder se o campo estiver vazio*/
            if (e.target.value.length == 0) {
                e.target.innerHTML = "Informação adicional";            }
        });

    </script>

</body>

</html>
