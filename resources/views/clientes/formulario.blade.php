@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Informe abaixo as informações do Cliente
                	<a class="pull-right" href="{{ url('clientes') }}"> Listagem de Clientes </a>
            	</div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif

                   	{!! Form::open(['url' => 'clientes/salvar']) !!}

                   	{!! Form::label('nome','Nome') !!}
           			{!! Form::input('text','nome','',['class' => 'form-control','autofocus','placeholder' => 'Nome']) !!}
			
                   	{!! Form::label('endereco','Endereço') !!}
           			{!! Form::input('text','endereco','',['class' => 'form-control','placeholder' => 'Endereço']) !!}

                   	{!! Form::label('numero','Número') !!}
           			{!! Form::input('text','numero','',['class' => 'form-control','placeholder' => 'Número']) !!}
					
					{!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                   	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
