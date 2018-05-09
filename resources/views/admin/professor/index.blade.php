@extends('adminlte::page')

@section('title', 'Professor')

@section('content_header')
    <h1>Professor</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Professor</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('professor.editar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="box-body">
        @include('admin.includes.alerts')
        <table class="table table-bordered table-hover table-responsive">
            {!! csrf_field() !!}
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Modalidade</th>
                    <th class="text-center"><i class="fa fa-cog"></i> Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($professores as $professor)
                <tr>
                    <td>{{ $professor->id }}</td>
                    <td>{{ $professor->typeFunc($professor->id_funcionario) }}</td>
                    <td>{{ $professor->typeModa($professor->id_modalidade) }}</td>
                    <td class="text-center">
                        <a class="btn btn-info " href="professor/editar/{{ $professor->id }}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="professor/excluir/{{ $professor->id }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $professores->links() !!}
    </div>
</div>

@stop