@extends('templates.painel.template')

@section("main-title")
	Relatório - Objectos Entregues
@endsection

@section("main-content")

    <style>
        .imprimir{
         
            font-size: 10pt;
            position: absolute;
            right: 9px;  
            z-index: 1;    
        }
    </style>

	<div class="right_col" role="main">
    <div class="">
       
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 col-md-6 col-sm-6  ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Objectos Entregues <small>Relatório</small></h2>
                        <div class="imprimir ">
                            <button class="imprimir btn btn-dark">Imprimir</button>
                        </div>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
    
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
    
                      </div>
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