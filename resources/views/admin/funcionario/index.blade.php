@extends('adminlte::page')

@section('title', 'Funcionários')

@section('content_header')
    <h1>Funcionários</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Funcionários</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('funcionario.editar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="box-body table-bordered table-hover table-responsive no-padding">
        <table class="table table-hover">
            {!! csrf_field() !!}
            <tbody>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>CEP</th>
                    <th>Endereço</th>
                    <th>Data Nascimento</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Cargo</th>
                    <th>Usuário</th>
                    <th>Data Admissão</th>
                    <th>Data Demissão</th>
                    <th class="text-center"><i class="fa fa-cog"></i> Funções</th>
                </tr>
                @foreach ($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->rg }}</td>
                    <td>{{ $funcionario->cpf }}</td>
                    <td>{{ $funcionario->cep }}</td>
                    <td>{{ $funcionario->rua }},{{ $funcionario->numero }}-{{ $funcionario->bairro }}-{{ $funcionario->cidade }}-{{ $funcionario->estado }}</td>
                    <td>{{ $funcionario->dt_nascimento }}</td>
                    <td>{{ $funcionario->telefone }}</td>
                    <td>{{ $funcionario->email }}</td>
                    <td>{{ $funcionario->typeCargo($funcionario->id_cargo) }}</td>
                    <td>{{ $funcionario->typeUser($funcionario->id_user) }}</td>
                    <td>{{ $funcionario->dt_admissao }}</td>
                    <td>{{ $funcionario->dt_demissao }}</td>
                    <td class="text-center">
                        <a class="btn btn-info " href="funcionario/editar/{{ $funcionario->id }}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="funcionario/excluir/{{ $funcionario->id }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
</div>
@stop