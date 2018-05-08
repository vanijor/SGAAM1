@extends('adminlte::page')

@section('title', 'Funcionario')

@section('content_header')
@if (isset($id))
    <h1>Editar Funcionario</h1>
@else
    <h1>Adicionar Funcionario</h1>
@endif
<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Funcionario</a></li>
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
            <div class="form-group has-warning">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $nome }}">
            </div>
            <div class="form-group">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" name="rg" id="rg" value="{{ $rg }}">
            </div>
            <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" value="{{ $cpf }}">
            </div>
            <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" value="{{ $cep }}">
            </div>
            <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" name="rua" id="rua" value="{{ $rua }}">
            </div>
            <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" name="numero" id="numero" value="{{ $numero }}">
            </div>
            <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $bairro }}">
            </div>
            <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $cidade }}">
            </div>
            <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" value="{{ $estado }}">
            </div>
            <div class="form-group">
                    <label for="nascimento">Data Nascimento</label>
                    <input type="text" class="form-control" name="nascimento" id="nascimento" value="{{ $nascimento }}">
            </div>
            <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $telefone }}">
            </div>
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $email }}">
            </div>
            <div class="form-group">//mudar para list
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" name="cargo" id="cargo" value="{{ $cargo }}">
            </div>
            <div class="form-group">
                <label>Cargo</label>
				<select name="type" class="form-control">
					<option>--Selecione--</option>
					@foreach ($types as $key => $type)
						<option value="{{$key}}">{{ $type }}</option>
					@endforeach
				</select>
            </div>
            <div class="form-group">
                    <label for="user">Usuário</label>
                    <input type="text" class="form-control" name="user" id="user" value="{{ $user }}">
            </div>
            <div class="form-group">
                    <label for="admissao">Data Admissão</label>
                    <input type="text" class="form-control" name="admissao" id="admissao" value="{{ $admissao }}">
            </div>
            <div class="form-group">
                    <label for="demissao">Data Admissão</label>
                    <input type="text" class="form-control" name="demissao" id="demissao" value="{{ $demissao }}">
            </div>
            @if (isset($id))
					<input type="submit" class="btn btn-primary" value="Editar">
			@else
					<input type="submit" class="btn btn-primary" value="Adicionar">
			@endif
        </form>        
    </div>
</div>

@stop