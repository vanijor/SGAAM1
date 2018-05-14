@extends('adminlte::page')

@section('title', 'Professor')

@section('content_header')
@if (isset($id))
    <h1>Editar Professor</h1>
@else
    <h1>Adicionar Professor</h1>
@endif
<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Professor</a></li>
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
                    <input type="text" class="form-control" name="nome" id="nome" value="{{ $nome }}">
                </div>
                <div class="form-group">
                    <label for="modalidade">Modalidade</label>
                    <input type="text" class="form-control" name="modalidade" id="modalidade" value="{{ $modalidade }}">
                </div>
				<input type="submit" class="btn btn-primary" value="Editar">
            @else
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}">
                </div>
                <div class="form-group">
                    <label for="modalidade">Modalidade</label>
                    <input type="text" class="form-control" name="modalidade" id="modalidade" value="{{ old('modalidade') }}">
                </div>
				<input type="submit" class="btn btn-primary" value="Adicionar">
			@endif
        </form>        
    </div>
</div>

@stop