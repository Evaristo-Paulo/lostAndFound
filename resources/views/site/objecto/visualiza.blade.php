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
              <img src="{{ url('site/assets/img/portfolio/portfolio-details-1.jpg')}}" class="img-fluid" alt="">
              <img src="{{ url('site/assets/img/portfolio/portfolio-details-2.jpg')}}" class="img-fluid" alt="">
              <img src="{{ url('site/assets/img/portfolio/portfolio-details-3.jpg')}}" class="img-fluid" alt="">
            </div>
  
            <div class="portfolio-info">
              <h3>Detalhes Principais</h3>
              <ul>
                <li><strong>Categoria</strong>: Documentação</li>
                <li><strong>Nº documento</strong>: 122333444455555</li>
                <li><strong>Localização</strong>: Cacuaco, Central. Sequele</li>
                <li><strong>Condição</strong>: Perdido</li>
              </ul>
            </div>
  
          </div>
  
          <div class="portfolio-description">
            <h2>Informações Adicionais</h2>
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
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
