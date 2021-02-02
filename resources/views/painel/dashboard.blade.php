@extends('templates.painel.template')
@section('main-title')
Painel de controle
@endsection

@section('main-content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="top_tiles col-lg-12">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats" style="background-color: #34B8A1">
                        <div class="icon"><img src="{{ url('painel/icon/png/008-handshake.png') }}" alt=""></div>
                        <div class="count">17</div>
                        <h3>Objectos Entregues</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats" style="background-color: #0099F4">
                        <div class="icon"><img src="{{ url('painel/icon/png/006-purse.png') }}" alt=""></div>
                        <div class="count">23</div>
                        <h3>Objectos Achados</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats" style="background-color: #F4AD01">
                        <div class="icon">
                            <img src="{{  url('painel/icon/png/002-lost-items-1.png') }}" alt="">
                        </div>
                        <div class="count">39</div>
                        <h3>Objectos Perdidos</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats" style="background-color: #EE2C4D">
                        <div class="icon"><img src="{{ url('painel/icon/png/002-thief.png') }}" alt=""></div>
                        <div class="count">25</div>
                        <h3>Objectos Roubados</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>    
            </div>
        </div>

        {{-- Aqui entra a logo --}}
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>

    </div>

</div>


@endsection

@section('css')
<link href="{{ url('painel/font/flaticon.css') }}" rel="stylesheet">

@endsection


@section('js')

@endsection
