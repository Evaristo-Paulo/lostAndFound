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
        <div class="container both-side-list">
            <div id="left-side-filtragem">
                <div class="filter-header ">
                    <h4 class="filter-category">Filtragem</h4>
                    <h4 class="filter-title-category">Condição</h4>
                </div>
                <form action="">
                    <div class="form-check">
                        <input type="checkbox" id="todos-condicao" name="todos-condicao" checked>
                        <label for="todos-condicao">Todos</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="perdido-condicao" name="perdido-condicao">
                        <label for="perdido-condicao">Perdido</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="roubado-condicao" name="roubado-condicao">
                        <label for="roubado-condicao">Roubado</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="achado-condicao" name="achado-condicao">
                        <label for="achado-condicao">Achado</label>
                    </div>


                    <button type="submit" class="filter-btn"><i class="bx bx-refresh"></i> Filtrar</button>

                </form>

                <div class="filter-header ">
                    <h4 class="filter-title-category">Categoria</h4>
                </div>
                <form action="">
                    <div class="form-check">
                        <input type="checkbox" id="todos-categoria" name="todos-categoria" checked>
                        <label for="todos-categoria">Todos</label>
                    </div>
                    @foreach($categorias as $categoria)
                        <div class="form-check">
                            <input type="checkbox" id="{{ $categoria['id'] }}-categoria"
                                name="{{ $categoria['categoria'] }}-categoria">
                            <label
                                for="{{ $categoria['id'] }}-categoria">{{ Str::ucfirst($categoria['categoria']) }}</label>
                        </div>
                    @endforeach

                    <button type="submit" class="filter-btn"><i class="bx bx-refresh"></i> Filtrar</button>

                </form>

            </div>
            <div id="right-side-content">
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
                                                <input class="search_input" type="text" name=""
                                                    placeholder="Pesquisar...">
                                                <button type="submit" class="search_icon"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row section-form-hidden-right" data-aos="fade-up" data-aos-delay="100">
                            <div class="filter-header">
                                <h4 class="filter-category filter-category-right">Condição</h4>
                            </div>
                            <form action="" class="form-filter-right">
                                <div class="container-filter-category">
                                    <div>
                                        <div class="form-check">
                                            <input type="checkbox" id="todos-condicao" name="todos-condicao" checked>
                                            <label for="todos-condicao">Todos</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="perdido-condicao" name="perdido-condicao">
                                            <label for="perdido-condicao">Perdido</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="roubado-condicao" name="roubado-condicao">
                                            <label for="roubado-condicao">Roubado</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" id="achado-condicao" name="achado-condicao">
                                            <label for="achado-condicao">Achado</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="filter-btn"><i class="bx bx-refresh"></i>
                                    Filtrar
                                </button>
                                <p class="filter-result"><small>5 resultado(s) encontrado(s) na filtragem</small></p>

                            </form>
                        </div>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
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
                                        <h5 class="card-title">{{ Str::ucfirst($objecto['categoria']) }}</h5>
                                        <h5 class="card-subtitle">
                                            {{ $objecto['provincia'] }}, {{ $objecto['municipio'] }}</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        @if($objecto['estado'] !=  'achado' && $objecto['estado'] !=  'fechado')
                                            <p class="card-text obj-achado"
                                            data-objecto="{{ $objecto['id'] }}"><small><i
                                                    class="bx bx-check"></i> Achei</small></p>
                                        @else
                                            <p class="card-text obj-achado achado-obj"
                                                data-objecto="{{ $objecto['id'] }}"><small><i
                                                        class="bx bx-check-double"></i> Achado</small></p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </section><!-- End Portfolio Section -->

            </div>
        </div>
    </section>

</main>

@endsection


@section('site-css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<style></style>

@endsection

@section('site-js')
<script src="{{ url('site/assets/js/paginacao.js') }}"></script>

<script>
    setTimeout(() => {
        document.querySelector('#notification-error').style.display = 'none'
    }, 3000);

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

            /* Aqui entra o AJAX */
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
@endsection
