@extends('templates.site.template')

@section('site-page-title')
Registo de objecto
@endsection

@section('site-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Registo de Objecto</h2>
                <ol>
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li>Registo de Objecto</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            
                            <!-- Smart Wizard -->
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                                Passo 1<br />
                                                <small>Dados Pessoais</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                                Passo 2<br />
                                                <small>Informações do Objecto</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                            <span class="step_descr">
                                                Passo 3<br />
                                                <small>Local da Perda</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="step-1" style="margin-top: 20px">
                                    <form class=""method="POST" action="{{  route('site.objecto.store') }}"  enctype="multipart/form-data" id="form">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class=" col-md-3 col-sm-3 label-align" for="first-name" style="visibility: hidden">Nome completo
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="first-name" name="nome_completo"
                                                    required="required" class="form-control " placeholder="Nome Completo">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" style="visibility: hidden"
                                                for="telefone">Telefone <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="tel" id="telefone" name="telefone" required="required"
                                                    class="form-control " placeholder="Telefone">
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <div id="step-2" style="margin-top: 20px">
                                    <form class="form-horizontal form-label-left">

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo" style="visibility: hidden">Tipo
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="" id="">
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="docs" style="visibility: hidden">Nº
                                                documento <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="docs" name="numero_doc" required="required"
                                                    class="form-control " placeholder="Nº documento">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="descricao-objecto" style="visibility: hidden">Descrição <span class="required" >*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <textarea name="" class="form-control" required id="" cols="30"
                                                    rows="2">Descrição do objecto</textarea>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="imagem-objecto" style="visibility: hidden">Imagem <span class="required" span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="step-3" style="margin-top: 20px">
                                    <form class="form-horizontal form-label-left">

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="localizacao-municipio" style="visibility: hidden">Município <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="" id="">
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                    <option value="">Itext</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="localizacao-bairro" style="visibility: hidden">Bairro <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="localizacao-bairro" name="last-name"
                                                    required="required" class="form-control " placeholder="Bairro">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="localizacao-descricao" style="visibility: hidden">Descrição <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <textarea name="" class="form-control" required id="" cols="30"
                                                    rows="2">Descrição da localização</textarea>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End SmartWizard Content -->
        </div>
    </section>
</main>
@endsection

@section('site-css')
<link href="{{ url('painel/build/css/wizard-form-site.css') }}" rel="stylesheet">
@endsection

@section('site-js')
<!-- jQuery -->
<script src="{{ url('painel/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
</script>
<!-- FastClick -->
<script src="{{ url('painel/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ url('painel/vendors/nprogress/nprogress.js') }}"></script>
<!-- jQuery custom content scroller -->
<script
    src="{{ url('painel/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}">
</script>
<script src="{{ url('painel/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ url('painel/build/js/custom.min.js') }}"></script>
<script src="{{ url('painel/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}">
</script>
@endsection
