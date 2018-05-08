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
        <button href="{{ route('cargo.editar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    <div class="box-body">
        @include('admin.includes.alerts')
        <table class="table table-bordered table-hover table-responsive">
            {!! csrf_field() !!}
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="text-center"><i class="fa fa-cog"></i> Ações</th>
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
        {!! $cargos->links() !!}
    </div>
</div>

@stop