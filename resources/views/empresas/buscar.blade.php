@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Busque uma empresa</div>

                    <div class="card-body">
                        <form method="post" name="submit" action="{{ route('empresa.store') }}">
                            @csrf @method('post')

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('cnpj') ? 'has-error' :'' }}">
                                            <b>{{ Form::label('cnpj', 'CNPJ') }}</b>
                                            {!! Form::text('cnpj', null, ['class'=>'form-control', 'placeholder'=>'Apenas números', 'required']) !!}
                                            @if($errors->has('cnpj'))
                                                <span class="help-block has-error"><span style="color: red; ">Informe o número do documento</span></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        {!! Form::submit('Buscar', ['name'=>'submit', 'class'=>'btn btn-primary btn-block']) !!}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    @if(!empty($empresa))
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dados da Empresa</div>
                        <div class="card-body">
                            <div class="modal-body">
                                <div class="row">
                                    @foreach($empresa as $dados)
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('cnpj', 'CNPJ') }}</b>
                                                {!! Form::text('cnpj', $dados['cnpj'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('matriz_filial', 'Matriz') }}</b>
                                                {!! Form::text('matriz_filial', $dados['matriz_filial'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('razao_social', 'Razão Social') }}</b>
                                                {!! Form::text('razao_social', $dados['razao_social'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('nome_fantasia', 'Nome Fantasia') }}</b>
                                                {!! Form::text('nome_fantasia', $dados['nome_fantasia'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(!empty($empresa))
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Situação</div>
                        <div class="card-body">
                            <div class="modal-body">
                                <div class="row">
                                    @foreach($empresa as $dados)
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('situacao', 'Situação') }}</b>
                                                {!! Form::text('situacao', $dados['situacao'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('data_situacao', 'Data Situação') }}</b>
                                                {!! Form::text('data_situacao', $dados['data_situacao'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
