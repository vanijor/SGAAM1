@extends('adminlte::page')

@section('title', 'Cargo')

@section('content_header')
@if (isset($id))
    <h1>Editar Cargo</h1>
@else
    <h1>Adicionar Cargo</h1>
@endif
<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Cargo</a></li>
    @if (isset($id))
        <li><a href="">Editar</a></li>
    @else
        <li><a href="">Adicionar</a></li>
    @endif
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
    </div>
    <div class="box-body">
        @include('admin.includes.alerts')
        <form method="POST" action="{{ $action }}">
            {!! csrf_field() !!}
            @if (isset($id))
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="cargo" id="nome" value="{{ $nome }}">
                </div>
				<input type="submit" class="btn btn-primary" value="Editar">
            @else
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="cargo" id="nome" value="{{ old('cargo') }}">
                </div>
				<input type="submit" class="btn btn-primary" value="Adicionar">
			@endif
        </form>        
    </div>
</div>

@stop