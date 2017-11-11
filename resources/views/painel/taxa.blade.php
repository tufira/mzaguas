@extends('layouts.admin')

@section('content')
<div class="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Taixa por metro cúbico</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                    <h5>Adicionar taixa por metro cúbico</h5>
                </div>

                <div class="widget-content nopadding">
                    <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('taxa.store')}}">
                        {{ csrf_field() }}

                            <!--User ID-->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="control-group {{ $errors->has('taxa') ? ' has-error' : '' }}">
                                <label for="taxa" class="control-label">Taxa por metro cúbico</label>

                                <div class="controls">
                                    <input id="taxa" type="number" name="taxa" step="any" value="{{ old('taxa') }}" class="input" required  maxlength="45">
                                </div>
                            </div>

                            <div class="control-group {{ $errors->has('descricao') ? ' has-error' : '' }}">
                                <label for="taxa" class="control-label">Taxa por metro cúbico</label>

                                <div class="controls">
                                    <textarea name="descricao" id="descricao" class="input" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                    <button id="novo" class=" btn btn-info">Novo</button>
                                <input id="next" class="btn btn-primary" type="submit" value="Registar" />
                                <div id="status"></div>
                            </div>
                            <div id="submitted"></div>
                    </form>
                </div>
            </div>

        </div>
        </div>
    </div>
</div>
</div>
@endsection
<script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
<script>
    $('#novo').click(function () {
        $('#taxa').val('');
        $('#taxa').enable();
    })
    $('.input').click(function () {
        alert('ok');
        $('#taxa').val('');
    })
</script>