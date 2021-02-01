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
                    <div class="tile-stats">
                        <div class="icon">
                            <img src="{{  url('painel/icon/png/002-lost-items-1.png') }}" alt="">
                        </div>
                        <div class="count">39</div>
                        <h3>Objectos Perdidos</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><img src="{{ url('painel/icon/png/006-purse.png') }}" alt=""></div>
                        <div class="count">23</div>
                        <h3>Objectos Achados</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><img src="{{ url('painel/icon/png/008-handshake.png') }}" alt=""></div>
                        <div class="count">17</div>
                        <h3>Objectos Entregues</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><img src="{{ url('painel/icon/png/004-group.png') }}" alt=""></div>
                        <div class="count">25</div>
                        <h3>Usuários</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Objectos perdidos</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Objectos achados</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="mybarChart"></canvas>
                    </div>
                </div>
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
