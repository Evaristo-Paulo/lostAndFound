@extends('templates.site.template')

@section('site-page-title')
Lista de objectos
@endsection

@section('site-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Lista de Objectos</h2>
                <ol>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li>Lista de Objectos</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title" data-aos="fade-left">
                        <h2>Aqui entra um INPUT PESQUISAR</h2>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">Todos</li>
                                    <li data-filter=".filter-app">Documentação</li>
                                    <li data-filter=".filter-card">Telefone</li>
                                    <li data-filter=".filter-web">Viatura</li>
                                    <li data-filter=".filter-web">Outros</li>
                                </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ url('site/assets/img/portfolio/portfolio-1.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Documentação</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url('site/assets/img/portfolio/portfolio-1.jpg') }}"
                                            data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('site.objecto.visualiza', 1) }}" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ url('site/assets/img/portfolio/portfolio-2.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Outros</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url('site/assets/img/portfolio/portfolio-2.jpg') }}"
                                            data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('site.objecto.visualiza', 1) }}" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ url('site/assets/img/portfolio/portfolio-3.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>Documentação</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url('site/assets/img/portfolio/portfolio-3.jpg') }}"
                                            data-gall="portfolioGallery" class="venobox" title="App 2"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('site.objecto.visualiza', 1) }}" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ url('site/assets/img/portfolio/portfolio-4.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 2</h4>
                                    <p>Telefone</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url('site/assets/img/portfolio/portfolio-4.jpg') }}"
                                            data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('site.objecto.visualiza', 1) }}" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ url('site/assets/img/portfolio/portfolio-5.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 2</h4>
                                    <p>Outros</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url('site/assets/img/portfolio/portfolio-5.jpg') }}"
                                            data-gall="portfolioGallery" class="venobox" title="Web 2"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('site.objecto.visualiza', 1) }}" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ url('site/assets/img/portfolio/portfolio-6.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>Documentação</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url('site/assets/img/portfolio/portfolio-6.jpg') }}"
                                            data-gall="portfolioGallery" class="venobox" title="App 3"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="{{ route('site.objecto.visualiza', 1) }}" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

        </div>
    </section>

</main>

@endsection


@section('site-css')
@endsection

@section('site-js')
@endsection
