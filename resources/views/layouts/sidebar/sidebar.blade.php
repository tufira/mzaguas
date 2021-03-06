<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i> Menu</a>
    <ul>
        <li><a href="{{route('cliente.index')}}"><i class="icon icon-home"></i> <span>Clientes</span></a> </li>
        <li><a href="{{route('contrato.index')}}"><i class="icon icon-signal"></i> <span>Contratos</span></a> </li>
        <li><a href="{{route('fatura.index')}}"><i class="icon icon-inbox"></i> <span>Faturas</span></a> </li>
        <li><a href="{{route('pagamento.index')}}"><i class="icon icon-th"></i> <span>Pagamentos</span></a></li>
        <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Parametrização</span> <span class="label label-important">3</span></a>
            <ul>
                <li><a href="{{route('fontenaria.index')}}">Fontenárias</a></li>
                <li><a href="{{route('distrito.index')}}">Distrito</a></li>
                <li><a href="{{route('taxa.index')}}">Taxa por metro cúbico</a></li>
                <li><a href="{{route('data-limite.index')}}">Data limite de pagamento</a></li>
                <li><a href="{{route('valor-multa.index')}}">Valor da multa</a></li>
                <li><a href="{{route('user.index')}}">Usuários</a></li>
            </ul>
        </li>
        <li class="content"> <span>Faturas não pagas</span>
            <div class="progress progress-mini progress-danger active progress-striped">
                <div style="width: 77%;" class="bar"></div>
            </div>
            <span class="percent">77%</span>
            <div class="stat">21419.94 / 14000 </div>
        </li>
        <li class="content"> <span>Faturas pagas</span>
            <div class="progress progress-mini active progress-striped">
                <div style="width: 87%;" class="bar"></div>
            </div>
            <span class="percent">87%</span>
            <div class="stat">604.44 / 4000 </div>
        </li>
    </ul>
</div>

<!--close-left-menu-stats-sidebar-->