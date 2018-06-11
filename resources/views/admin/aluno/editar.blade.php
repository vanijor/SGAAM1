@extends('adminlte::page')

@section('title', 'Aluno')

@section('content_header')
@if (isset($id))
    <h1>Editar Aluno</h1>
@else
    <h1>Adicionar Aluno</h1>
@endif
<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Aluno</a></li>
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
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{ $nome }}">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" value="{{ $cpf }}">
                </div>
                <div class="form-group">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" name="rg" id="rg" value="{{ $rg }}" onKeyUp="nu(this)">
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
                <div class="form-group">
                    <label for="plano">Plano</label>
                    <select name="plano" id="plano" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($planos as $plano)
                            <option value="{{ $plano->id }}">{{ $plano->tipo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="modalidade">Modalidade</label>
                        <select name="modalidade" id="modalidade" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($modalidades as $modalidade)
                            <option value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                        @endforeach
                        </select>
                </div>
                
				<input type="submit" class="btn btn-primary" value="Editar"  onClick="if(document.getElementById('rg').value != ''){ValRG(document.getElementById('rg').value)}else{alert('RG em branco')}">
            @else
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf"  value="{{ old('cpf') }}">
                </div>
                <div class="form-group">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" name="rg" id="rg"  value="{{ old('rg') }}" onKeyUp="nu(this)">
                </div>
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep"  value="{{ old('cep') }}">
                </div>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" name="rua" id="rua"  value="{{ old('rua') }}">
                </div>
                <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" name="numero" id="numero"  value="{{ old('numero') }}">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro"  value="{{ old('bairro') }}">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade"  value="{{ old('cidade') }}">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado"   value="{{ old('estado') }}">
                </div>
                <div class="form-group">
                    <label for="nascimento">Data Nascimento</label>
                    <input type="text" class="form-control" name="nascimento" id="nascimento"  value="{{ old('nascimento') }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone"  value="{{ old('telefone') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email"  value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="plano">Plano</label>
                    <select name="plano" id="plano" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($planos as $plano)
                            <option value="{{ $plano->id }}">{{ $plano->tipo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="modalidade">Modalidade</label>
                    <select name="modalidade" id="modalidade" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($modalidades as $modalidade)
                            <option value="{{ $modalidade->id }}">{{ $modalidade->nome }}</option>
                        @endforeach
                    </select>
                </div>

				<input type="submit" class="btn btn-primary" value="Adicionar"  onClick="if(document.getElementById('rg').value != ''){ValRG(document.getElementById('rg').value)}else{alert('RG em branco')}">
			@endif
        </form>        
    </div>
</div>

@stop