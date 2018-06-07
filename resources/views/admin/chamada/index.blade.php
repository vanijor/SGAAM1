@extends('adminlte::page')

@section('title', 'Lista de Chamada')

@section('content_header')
    <h1>Lista de Chamada</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Chamada</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h4>{{ $mytime }}</h4>
    </div>
    <div class="box-body">
        @include('admin.includes.alerts')
        {{ Form::open(array('route' => 'chamada.inserir','method' => 'POST')) }}
            {!! csrf_field() !!}
            <table class="table table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Aluno</th>
                        <th class="text-center">Presente</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->nome}} {{ Form::hidden('aluno_id[' . $aluno->id .']', $aluno->id) }}</td>
                        <td class="text-center">{{ Form::checkbox('presente[' . $aluno->id . ']', null, true   ) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>

@stop
