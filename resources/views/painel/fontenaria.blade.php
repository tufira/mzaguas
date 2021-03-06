@extends('layouts.admin')

@section('content')
    <div class="content">

        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Painel</a> <a
                        href="#">Parametrização</a> <a href="#">Fontenária</a></div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">

                    <!--Mensagens-->
                    @include('layouts.mensagens.msg')

                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                            <h5>Registar Fontenária</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('fontenaria.store')}}">
                                {{ csrf_field() }}

                                <div class="control-group">
                                    <label for="nome" class="control-label">Nome</label>

                                    <div class="controls">
                                        <input id="nome" type="text" name="nome" value="{{ old('name') }}" required autofocus maxlength="45">
                                    </div>
                                </div>

                                    <div class="control-group">
                                        <label for="distrito_id" class=" control-label">Distrito</label>

                                        <div class="controls">
                                            <select name="distrito_id" id="distrito_id" required class="span4">
                                                <option>Selecione o Distrito</option>
                                                @foreach($distritos as $distrito)
                                                    <option value="{{$distrito->id}}">{{$distrito->nome}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                        <div class="control-group">
                            <label for="endereco" class="control-label">Endereço</label>

                            <div class="controls">
                                <input id="endereco" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="tel1" class="control-label">Tel1</label>

                            <div class="controls">
                                <input id="tel1" type="number" class="form-control" name="tel1" value="{{ old('tel1') }}" min="1" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="tel2" class="control-label">Tel2</label>

                            <div class="controls">
                                <input id="tel2" type="text" class="form-control" name="tel2" value="{{ old('tel2') }}" >
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="email" class="control-label">E-Mail</label>

                            <div class="controls">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary">
                                    Registar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Lista de Fontenárias</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Tel</th>
                                    <th>email</th>
                                    <th>Diatrito</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fontenarias as $cli)
                                    <tr>
                                        <td>{{$cli->nome}}</td>
                                        <td>{{$cli->endereco}}</td>
                                        <td>{{$cli->tel1}} & {{$cli->tel2}}</td>
                                        <td>{{$cli->email}}</td>
                                        <td>{{$cli->distito_id}}</td>
                                        <td width="50">
                                            <a href="" class="actions edit text-warning"><i class="fa fa-pencil" aria-hidden="true"> edit</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </div>
  </div>
</div>
@endsection
