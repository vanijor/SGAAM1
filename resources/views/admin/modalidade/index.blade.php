@extends('adminlte::page')

@section('title', 'Modalidade')

@section('content_header')
    <h1>Modalidade</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Modalidade</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('modalidade.editar')}}" class="btn btn-primary">
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
                    <th>Modalidade</th>
                    <th>Qt Aula Semanal</th>
                    <th>Horas Aula</th>
                    <th>Professor</th>
                    <th class="text-center"><i class="fa fa-cog"></i> Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modalidades as $modalidade)
                <tr>
                    <td>{{ $modalidade->id }}</td>
                    <td>{{ $modalidade->nome }}</td>
                    <td>{{ $modalidade->qt_aulasem }}</td>
                    <td>{{ $modalidade->qt_hraula }}</td>
                    <td>{{ $modalidade->typeProf($modalidade->professor_id) }}</td>
                    <td class="text-center">
                        <a class="btn btn-info " href="modalidade/editar/{{ $modalidade->id }}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="modalidade/excluir/{{ $modalidade->id }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $modalidades->links() !!}
    </div>
</div>

@stop
