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
                        @if(session('warning'))
                            <div class="page-header" id="notification-warning">
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="ti-check"></i> {{ session('warning') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="page-header" id="notification-success">
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="ti-check"></i> {{ session('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="page-header" id="notification-error">
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="ti-check"></i> {{ session('error') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="x_content">
                            <div class="payment">
                                <section class="wizard-section">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 col-md-6">
                                            <div
                                                class="wizard-content-left d-flex justify-content-center align-items-center">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-wizard">
                                                <form method="post" role="form" {{  route('site.objecto.store') }} enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    <div class="form-wizard-header">
                                                        <p>Preenche todos os campos do formulário</p>
                                                        <ul class="list-unstyled form-wizard-steps clearfix" style="display: flex; justify-content: center">
                                                            <li class="active"><span>1</span></li>
                                                            <li><span>2</span></li>
                                                            <li><span>3</span></li>
                                                            <li><span>4</span></li>
                                                        </ul>
                                                    </div>
                                                    <fieldset class="wizard-fieldset show">
                                                        <h5>Dados pessoais</h5>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control wizard-required"
                                                                name="nome" id="lname">
                                                            <label for="lname" class="wizard-form-text-label">Nome
                                                                completo</label>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="tel" class="form-control wizard-required"
                                                                name="telefone" id="telefone">
                                                            <label for="telefone" class="wizard-form-text-label">Nº
                                                                telefone</label>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <a href="javascript:;"
                                                                class="form-wizard-next-btn float-right">Próximo</a>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="wizard-fieldset">
                                                        <h5>Dados do objecto</h5>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6">
                                                                <div class="form-group">
                                                                    <select class="form-control" name="tipo">
                                                                        <option value="" disabled selected>Selecionar
                                                                            categoria
                                                                        </option>
                                                                            @foreach( $tipos_objectos as $value )
                                                                            <option value="{{ $value->id }}">
                                                                                {{ $value->nome }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control wizard-required"
                                                                id="fname2" name="documento">
                                                            <label for="fname2" class="wizard-form-text-label">Nº
                                                                documento </label>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="location"
                                                                name="objDescricao" name="" id="" cols="30"
                                                                rows="2"></textarea>
                                                            <label for="location"
                                                                class="wizard-form-text-label">Descrição (opcional)</label>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <a href="javascript:;"
                                                                class="form-wizard-previous-btn float-left">Anterior</a>
                                                            <a href="javascript:;"
                                                                class="form-wizard-next-btn float-right">Próximo</a>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="wizard-fieldset">
                                                        <h5>Local e informação da Perda</h5>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                <div class="form-group">
                                                                    <select class="form-control" name="provincia" id="provincia">
                                                                        <option value="" disabled selected>Selecionar
                                                                            provincia
                                                                        </option>
                                                                        @foreach( $provincias as $value )
                                                                            <option value="{{ $value->id }}">
                                                                                {{ $value->nome }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                <div class="form-group">
                                                                    <select class="form-control" name="municipio" id="municipio">
                                                                        <option value="" disabled selected>Aguardando ...
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control wizard-required"
                                                                name="bairro" id="cardname">
                                                            <label for="cardname"
                                                                class="wizard-form-text-label">Bairro</label>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="estado">
                                                                <option value="#" selected disabled>Selecionar condição do objecto</option>
                                                                <option value="achado">Achado</option>
                                                                <optgroup label="Extraviado">
                                                                  <option value="perdido">Perdido</option>
                                                                  <option value="roubado">Roubado</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="location"
                                                                name="localDescricao" cols="30"
                                                                rows="2"></textarea>
                                                            <label for="location"
                                                                class="wizard-form-text-label">Informação adicional (opcional)
                                                            </label>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <a href="javascript:;"
                                                                class="form-wizard-previous-btn float-left">Anterior</a>
                                                            <a href="javascript:;"
                                                                class="form-wizard-next-btn float-right">Próximo</a>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="wizard-fieldset">
                                                        <h5>Fotografia do objecto</h5>
                                                        <div class="form-group">
                                                            <input type="file" class="form-control wizard-required"
                                                                name="foto[]" id="honame" multiple="multiple">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="file" class="form-control"
                                                                name="foto[]" id="file" multiple="multiple">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="file" class="form-control"
                                                                name="foto[]" id="file" multiple="multiple">
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <a href="javascript:;"
                                                                class="form-wizard-previous-btn float-left">Anterior</a>
                                                            <button type="submit"
                                                                class="form-wizard-submit float-right">Registar</button>
                                                        </div>
                                                    </fieldset>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>

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
<!-- Dropzone.js -->
<link href="{{  url('painel/vendors/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">

<style>
    .wizard-content-left {
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.45);
        background-image: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/396-mckinsey-21a0567-jir.jpg?w=1000&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=1d29df4866197df8364a6de6ef541728");
        background-position: center center;
        background-size: cover;
        height: 100vh;
        padding: 30px;
    }

    .wizard-content-left h1 {
        color: #ffffff;
        font-size: 38px;
        font-weight: 600;
        padding: 12px 20px;
        text-align: center;
    }

    .form-wizard {
        color: #888888;
        padding: 30px;
    }

    .form-wizard .wizard-form-radio {
        display: inline-block;
        margin-left: 5px;
        position: relative;
    }

    .form-wizard .wizard-form-radio input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        background-color: #dddddd;
        height: 25px;
        width: 25px;
        display: inline-block;
        vertical-align: middle;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:focus {
        outline: 0;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked {
        background-color: #00805D;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        display: inline-block;
        background-color: #ffffff;
        border-radius: 50%;
        left: 1px;
        right: 0;
        margin: 0 auto;
        top: 8px;
    }

    .payment-type {
        margin-left: -20px;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
        content: "";
        display: inline-block;
        webkit-animation: click-radio-wave 0.65s;
        -moz-animation: click-radio-wave 0.65s;
        animation: click-radio-wave 0.65s;
        background: #000000;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
        border-radius: 50%;
    }

    .form-wizard .wizard-form-radio input[type="radio"]~label {
        padding-left: 10px;
        cursor: pointer;
    }

    .form-wizard .form-wizard-header {
        text-align: center;
        padding-top: 20px;
    }

    .form-wizard .form-wizard-header p {
        margin-top: 20px;
    }

    .form-wizard .form-wizard-next-btn,
    .form-wizard .form-wizard-previous-btn,
    .form-wizard .form-wizard-submit {
        background-color: #55BB9F;
        color: #ffffff;
        display: inline-block;
        min-width: 100px;
        min-width: 120px;
        padding: 10px;
        text-align: center;
    }

    .form-wizard .form-wizard-submit {
        border: none;
    }

    .form-wizard .form-wizard-next-btn:hover,
    .form-wizard .form-wizard-next-btn:focus,
    .form-wizard .form-wizard-previous-btn:hover,
    .form-wizard .form-wizard-previous-btn:focus,
    .form-wizard .form-wizard-submit:hover,
    .form-wizard .form-wizard-submit:focus {
        color: #ffffff;
        opacity: 0.6;
        text-decoration: none;
    }

    .form-wizard .wizard-fieldset {
        display: none;
    }

    .form-wizard .wizard-fieldset.show {
        display: block;
    }

    .form-wizard .wizard-form-error {
        display: none;
        background-color: #d70b0b;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 2px;
        width: 90%;
    }

    .form-wizard .form-wizard-previous-btn {
        background-color: #00805D;
    }

    .your-location {
        color: #00805D;
        font-size: 12px;
        margin-left: -20px
    }

    .form-wizard .form-control {
        font-weight: 300;
        height: auto !important;
        padding: 15px;
        color: #888888;
        background-color: #f1f1f1;
        border: none;
        margin: auto -20px;
    }

    .form-wizard .form-control:focus {
        box-shadow: none;
    }

    .form-wizard .form-group {
        position: relative;
        margin: 25px 0;
    }

    .form-group.clearfix {
        margin-left: -20px;
        margin-right: 20px;
    }

    .form-wizard .wizard-form-text-label {
        position: absolute;
        left: 10px;
        top: 16px;
        transition: 0.2s linear all;
    }

    .form-wizard .focus-input .wizard-form-text-label {
        color: #55BB9F;
        top: -18px;
        transition: 0.2s linear all;
        font-size: 12px;
    }

    .form-wizard .form-wizard-steps {
        margin: 30px 0;
    }

    .form-wizard .form-wizard-steps li {
        width: 25%;
        float: left;
        position: relative;
    }

    .form-wizard .form-wizard-steps li::after {
        background-color: #f3f3f3;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        border-bottom: 1px solid #dddddd;
        border-top: 1px solid #dddddd;
    }

    .form-wizard .form-wizard-steps li span {
        background-color: #dddddd;
        border-radius: 50%;
        display: inline-block;
        height: 40px;
        line-height: 40px;
        position: relative;
        text-align: center;
        width: 40px;
        z-index: 1;
    }

    .form-wizard .form-wizard-steps li:last-child::after {
        width: 50%;
    }

    .form-wizard .form-wizard-steps li.active span,
    .form-wizard .form-wizard-steps li.activated span {
        background-color: #55BB9F;
        color: #ffffff;
    }

    .form-wizard .form-wizard-steps li.active::after,
    .form-wizard .form-wizard-steps li.activated::after {
        background-color: #55BB9F;
        left: 50%;
        width: 50%;
        border-color: #55BB9F;
    }

    .form-wizard .form-wizard-steps li.activated::after {
        width: 100%;
        border-color: #55BB9F;
    }

    .form-wizard .form-wizard-steps li:last-child::after {
        left: 0;
    }

    .form-wizard .wizard-password-eye {
        position: absolute;
        right: 32px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    <blade keyframes|%20click-radio-wave%20%7B%0D>0% {
        width: 25px;
        height: 25px;
        opacity: 0.35;
        position: relative;
    }

    100% {
        width: 60px;
        height: 60px;
        margin-left: -15px;
        margin-top: -15px;
        opacity: 0.0;
    }
    }

    <blade media|%20screen%20and%20(max-width%3A%20767px)%20%7B%0D>.wizard-content-left {
        height: auto;
    }

    .form-wizard .form-control {
        margin: auto;
    }

    .your-location {
        margin-left: 0px
    }

    .payment-type {
        margin-left: 0px;
    }

    .form-group.clearfix {
        margin: 0;
    }

    .form-wizard .wizard-form-error {
        width: 100%;
    }
    }

    .wizard-both .form-control {
        width: 100%;
    }

    .wizard-both {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border: 1px solid red;
        padding: 0;
        margin: 0;
    }

</style>

@endsection

@section('site-js')
<!-- Dropzone.js -->
<script src="{{ url('painel/vendors/dropzone/dist/min/dropzone.min.js') }}"></script>

<script>
    jQuery(document).ready(function () {
        // click on next button
        jQuery('.form-wizard-next-btn').click(function () {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                '.form-wizard-steps .active');
            var next = jQuery(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function () {
                var thisValue = jQuery(this).val();

                if (thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if (nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show", "400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',
                    "400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
                jQuery(document).find('.wizard-fieldset').each(function () {
                    if (jQuery(this).hasClass('show')) {
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(
                            function () {
                                if (jQuery(this).attr('data-attr') == formAtrr) {
                                    jQuery(this).addClass('active');
                                    var innerWidth = jQuery(this).innerWidth();
                                    var position = jQuery(this).position();
                                    jQuery(document).find('.form-wizard-step-move').css({
                                        "left": position.left,
                                        "width": innerWidth
                                    });
                                } else {
                                    jQuery(this).removeClass('active');
                                }
                            });
                    }
                });
            }
        });
        //click on previous button
        jQuery('.form-wizard-previous-btn').click(function () {
            var counter = parseInt(jQuery(".wizard-counter").text());;
            var prev = jQuery(this);
            var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                '.form-wizard-steps .active');
            prev.parents('.wizard-fieldset').removeClass("show", "400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',
                "400");
            jQuery(document).find('.wizard-fieldset').each(function () {
                if (jQuery(this).hasClass('show')) {
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(
                        function () {
                            if (jQuery(this).attr('data-attr') == formAtrr) {
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({
                                    "left": position.left,
                                    "width": innerWidth
                                });
                            } else {
                                jQuery(this).removeClass('active');
                            }
                        });
                }
            });
        });
        //click on form submit button
        jQuery(document).on("click", ".form-wizard .form-wizard-submit", function () {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                '.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function () {
                var thisValue = jQuery(this).val();
                if (thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
        });
        // focus on input field check empty or not
        jQuery(".form-control").on('focus', function () {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().addClass("focus-input");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
            }
        }).on('blur', function () {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideDown("3000");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });
    });

</script>
<script>
    setTimeout(() => {
        document.querySelector('#notification-success').style.display = 'none'
    }, 3000);
    setTimeout(() => {
        document.querySelector('#notification-warning').style.display = 'none'
    }, 3000);
    setTimeout(() => {
        document.querySelector('#notification-error').style.display = 'none'
    }, 3000);
</script>

<script>
    $(function () {
        $('#provincia').on('change', function (e) {
            var provincia_id = e.target.value;
            $('#municipio').empty();
            //Ajax
            $.get('/ajax-subcat?provincia_id=' + provincia_id, function (data) {
                $('#municipio').append(
                    '<option selected disabled>Selecionar município</option>')
                $.each(data, function (index, subcatObj) {
                    console.log(index)
                    $('#municipio').append('<option value="' + subcatObj.id +
                        '">' + subcatObj.nome + '</option>')
                });
            });
        });
    });
</script>

@endsection
