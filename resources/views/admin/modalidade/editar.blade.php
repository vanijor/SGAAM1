@extends('adminlte::page')

@section('title', 'Modalidade')

@section('content_header')
@if (isset($id))
    <h1>Editar Modalidade</h1>
@else
    <h1>Adicionar Modalidade</h1>
@endif
<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Modalidade</a></li>
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
                    <label for="modalidade">Modalidade</label>
                    <input type="text" class="form-control" name="modalidade" id="modalidade" value="{{ $modalidade }}">
                </div>
                <div class="form-group">
                    <label for="semanal">Qt Aula Semanal</label>
                    <input type="text" class="form-control" name="semanal" id="semanal" value="{{ $semanal }}">
                </div>
                <div class="form-group">
                    <label for="horas">Horas Aula</label>
                    <input type="text" class="form-control" name="horas" id="horas" value="{{ $horas }}">
                </div>
                <div class="form-group">
                    <label for="professor">Professor</label>
                    <select name"professor" id="professor" class="form-control">
                        <option value="">--Selecione--</option>
                            @foreach ( $professores as $professor )
                                <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                            @endforeach
                       </select>
                </div>
				<input type="submit" class="btn btn-primary" value="Editar">
            @else
                <div class="form-group">
                    <label for="modalidade">Modalidade</label>
                    <input type="text" class="form-control" name="modalidade" id="modalidade" value="{{ old('modalidade') }}">
                </div>
                <div class="form-group">
                    <label for="semanal">Qt Aula Semanal</label>
                    <input type="text" class="form-control" name="semanal" id="semanal" value="{{ old('semanal') }}">
                </div>
                <div class="form-group">
                    <label for="horas">Horas Aula</label>
                    <input type="text" class="form-control" name="horas" id="horas" value="{{ old('horas') }}">
                </div>
                <div class="form-group">
                <label for="professor">Professor</label>
                    <select name="professor" id="professor" class="form-control">
                        <option value="">Selecione</option>
                            @foreach($professores as $professor)
                        <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                            @endforeach
                    </select>
                </div>
				<input type="submit" class="btn btn-primary" value="Adicionar">
			@endif
        </form>        
    </div>
</div>

@stop