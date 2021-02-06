<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Painel</h3>
        <ul class="nav side-menu">
            <li><a href="{{route('painel')}}"><i class="fa fa-home"></i>Página Inicial</a></li>
            <li><a><i class="fa fa-bar-chart"></i>Estatistica<span class="fa fa-chevron-down"></span></a>
                 <ul class="nav child_menu">
                    <li><a href="{{route('estatistica.estatisticaEntregues')}}">Entregues</a></li>
                    <li><a href="{{route('estatistica.estatisticaAchados')}}">Achados</a></li>
                    <li><a href="{{route('estatistica.estatisticaPerdidos')}}">Perdidos</a></li>
                    <li><a href="{{route('estatistica.estatisticaRoubados')}}">Roubados</a></li>

                </ul>
            </li>
            <li><a><i class="fa fa-calendar-o"></i>Relatório<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('relatorio.relatorioEntregues')}}">Entregues</a></li>
                    <li><a href="{{ route('relatorio.relatorioAchados')}}">Achados</a></li>
                    <li><a href="{{ route('relatorio.relatorioPerdidos')}}">Perdidos</a></li>
                    <li><a href="{{ route('relatorio.relatorioRoubados')}}">Roubados</a></li>

                </ul>
            </li>
            <li><a><i class="fa fa-user"></i>Utilizador <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('object.create')}}">Registar</a></li>
                    <li><a href="form_buttons.html">Listar</a></li>

                </ul>
            </li>
            
        </ul>
    </div>  
</div>
