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

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('data_inicio_ativ', 'Início Atividade') }}</b>
                                                {!! Form::text('data_inicio_ativ', date('d/m/Y', strtotime($dados['data_inicio_ativ'])), ['class'=>'form-control', 'disabled']) !!}
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
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Endereço Matriz</div>
                        <div class="card-body">
                            <div class="modal-body">
                                <div class="row">
                                    @foreach($empresa as $dados)
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <b>{{ Form::label('tipo_logradouro', 'Tipo Logradouro') }}</b>
                                                {!! Form::text('tipo_logradouro', $dados['tipo_logradouro'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <b>{{ Form::label('logradouro', 'Logradouro') }}</b>
                                                {!! Form::text('logradouro', $dados['logradouro'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <b>{{ Form::label('numero', 'Número') }}</b>
                                                {!! Form::text('numero', $dados['numero'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b>{{ Form::label('complemento', 'Complemento') }}</b>
                                                {!! Form::textarea('complemento', $dados['complemento'], ['class'=>'form-control', 'disabled', 'rows'=>'2']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <b>{{ Form::label('bairro', 'Bairro') }}</b>
                                                {!! Form::text('bairro', $dados['bairro'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <b>{{ Form::label('cep', 'CEP') }}</b>
                                                {!! Form::text('cep', $dados['cep'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <b>{{ Form::label('uf', 'Estado') }}</b>
                                                {!! Form::text('uf', $dados['uf'], ['class'=>'form-control', 'disabled']) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <b>{{ Form::label('municipio', 'Cidade') }}</b>
                                                {!! Form::text('municipio', $dados['municipio'], ['class'=>'form-control', 'disabled']) !!}
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
