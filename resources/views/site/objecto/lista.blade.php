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
            Aqui entra o conteudo
        </div>
    </section>

</main>

@endsection


@section('site-css')
@endsection

@section('site-js')
@endsection
