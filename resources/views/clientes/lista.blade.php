@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Clientes
                	<a class="pull-right" href="{{ url('clientes/novo') }}"> Novo Cliente </a>
            	</div>

                <div class="panel-body">
                   Listagem de clientes
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
