@extends('adminlte::page')

@section('title', 'Adicionar Cargo')

@section('content_header')
<h1>Adicionar Cargo</h1>

<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Cargo</a></li>
    <li><a href="">Adicionar</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
    </div>
    <div class="box-body">
        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('cargo.addcargo') }}">
                {!! csrf_field() !!}
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="cargo" id="nome" placeholder="Nome do Cargo">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>        
    </div>
</div>

@stop