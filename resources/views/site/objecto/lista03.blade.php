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
            @if(session('error'))
                <div class="page-header" id="notification-error">
                    <div class="row">
                        <div class="col-md-12">
                            <i class="ti-check"></i> {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif
            <section id="portfolio" class="portfolio">
                <div class="container">
                    <form class="row" id="search-box">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <div class="h-100">
                                    <div class="h-100">
                                        <div class="searchbar">
                                            <input class="search_input" type="text" name="" placeholder="Pesquisar...">
                                            <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="filter-category">Filtragem de resultados</h4>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">Todos</li>
                                    @foreach($categorias as $categoria)
                                        <li data-filter=".filter-{{ $categoria['categoria'] }}">{{ $categoria['categoria'] }}</li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach($listaObjecto as $objecto)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$objecto['categoria']}}">
                                <div class="portfolio-wrap">
                                    <img src="{{ url("storage/objectos/". $objecto['fotografia']. "") }}"
                                        class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $objecto['categoria'] }} {{$objecto['id']}}</h4>
                                        <p>{{ $objecto['categoria'] }}</p>
                                        <div class="portfolio-links">
                                            <a href="{{ url("storage/objectos/". $objecto['fotografia']. "") }}"
                                                data-gall="portfolioGallery" class="venobox" title="{{ $objecto['categoria'] }} {{ $objecto['id'] }}"><i
                                                    class="bx bx-plus"></i></a>
                                            <a href="{{ route('site.objecto.visualiza', $objecto['id']) }}"
                                                title="Mais Detalhes"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>

                </div>
            </section><!-- End Portfolio Section -->

        </div>
    </section>

</main>

@endsection


@section('site-css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endsection

@section('site-js')
<script>
    setTimeout(() => {
        document.querySelector('#notification-error').style.display = 'none'
    }, 3000);
</script>
@endsection
