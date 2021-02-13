@extends('templates.site.template')

@section('site-page-title')
Visualização de objecto
@endsection

@section('site-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Visualização de Objecto</h2>
                <ol>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li>Visualização de Objecto</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="portfolio-details-container" data-aos="fade-up" data-aos-delay="100">
  
            <div class="owl-carousel portfolio-details-carousel">
              @foreach($objecto['fotografia'] as $fotografia)
                <img src="{{ url("storage/objectos/". $fotografia. "") }}" alt="">
              @endforeach
            </div>
  
            <div class="portfolio-info">
              <h3>Detalhes Principais</h3>
              <ul>
                <li><strong>Categoria</strong>: {{  $objecto['categoria'] }}</li>
                <li><strong>Nº documento</strong>: {{  $objecto['n_documento'] }}</li>
                <li><strong>Localização</strong>: {{  $objecto['municipio'] }}, {{  $objecto['bairro'] }}</li>
                <li><strong>Condição</strong>: {{  $objecto['condicao'] }}</li>
                <li><strong>Fotografia(s)</strong>: {{  count($objecto['fotografia']) }}</li>
              </ul>
            </div>
  
          </div>
  
          <div class="portfolio-description">
            <h2>Informações Adicionais</h2>
            <p>
              {{  $objecto['obj_descricao'] }}
            </p>
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->

</main>

@endsection


@section('site-css')
@endsection

@section('site-js')
@endsection
