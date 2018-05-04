@extends('adminlte::page')

@section('title', 'Cargo')

@section('content_header')
    <h1>Cargo</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Cargo</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('cargo.editar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="box-body table-bordered table-hover table-responsive no-padding">
        @include('admin.includes.alerts')
        <table class="table table-hover">
            {!! csrf_field() !!}
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="text-center"><i class="fa fa-cog"></i> Funções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->id }}</td>
                    <td>{{ $cargo->nome }}</td>
                    <td class="text-center">
                        <a class="btn btn-info " href="cargo/editar/{{ $cargo->id }}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="cargo/excluir/{{ $cargo->id }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop