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
                        <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                        <div class="count">39</div>
                        <h3>Objectos Perdidos</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">23</div>
                        <h3>Objectos Achados</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                        <div class="count">17</div>
                        <h3>Objectos Entregues</h3>
                        <p><a href="#">Ver mais</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-users"></i></div>
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
                        <h2>Line graph<small>Sessions</small></h2>
                        
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
                        <h2>Bar graph <small>Sessions</small></h2>
                        
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

@endsection


@section('js')

@endsection
