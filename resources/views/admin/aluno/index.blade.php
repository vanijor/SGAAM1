@extends('adminlte::page')

@section('title', 'Aluno')

@section('content_header')
    <h1>Aluno</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Aluno</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('aluno.editar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="box-body">
        @include('admin.includes.alerts')
        <table id="tbjs" class="table table-bordered table-hover table-responsive">
        {!! csrf_field() !!}
        <thead>
            <tr>
                <th>Nome</th>
                <th>RG</th>
                <th>CPF</th>
                <th>CEP</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Plano</th>
                <th>Modalidade</th>
                <th class="text-center"><i class="fa fa-cog"></i> Ações</th>
            </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->rg }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->cep }}
                        <a href="#" data-toggle="popover" title="Endereço" data-content="
                        {{ $aluno->rua }},
                        {{ $aluno->numero }} -
                        {{ $aluno->bairro }} -
                        {{ $aluno->cidade }} /
                        {{ $aluno->estado }}" data-trigger="focus" data-placement="bottom"> <i class="fa fa-info-circle"></i>
                        </a>
                    </td>
                    <td>{{ $aluno->dt_nascimento }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->typePlano($aluno->plano_id) }}</td>
                    <td>{{ $aluno->typeModa($aluno->modalidade_id) }}</td>
                    <td class="text-center">
                        <a class="btn btn-info " href="aluno/editar/{{ $aluno->id }}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="aluno/excluir/{{ $aluno->id }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
