@extends('adminlte::page')

@section('title', 'Pagamento')

@section('content_header')
@if (isset($id))
    <h1>Editar Pagamento</h1>
@else
    <h1>Adicionar Pagamento</h1>
@endif
<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Pagamento</a></li>
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
                    <input type="text" class="form-control" name="nome"
                     id="nome" value="{{ $nome }}">
                </div>
                <div class="form-group">
                    <label for="mes_referente">Mês referenteF</label>
                    <input type="text" class="form-control" name="mes_referente"
                     id="mes_referente" value="{{ $mes_referente }}">
                </div>
                <div class="form-group">
                    <label for="dt_nascimento">Data de vencimento</label>
                    <input type="text" class="form-control" name="dt_nascimento"
                    id="dt_nascimento" value="{{ $dt_nascimento }}">
                </div>
                <div class="form-group">
                    <label for="vl_mensalidade">Valor mensalidade</label>
                    <input type="text" class="form-control" name="vl_mensalidade"
                    id="vl_mensalidade" value="{{ $vl_mensalidade }}">
                </div>
                <div class="form-group">
                    <label for="id_modalidade">Modalidade</label>
                    <input type="text" class="form-control" name="id_modalidade"
                    id="id_modalidade" value="{{ $id_modalidade }}">
                </div>
                
				<input type="submit" class="btn btn-primary" value="Editar">

            @else
            <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome"
                     id="nome" value="{{ $nome }}">
                </div>
                <div class="form-group">
                    <label for="mes_referente">Mês referente</label>
                    <input type="text" class="form-control" name="mes_referente"
                     id="mes_referente" value="{{ $mes_referente }}">
                </div>
                <div class="form-group">
                    <label for="dt_nascimento">Data de vencimento</label>
                    <input type="text" class="form-control" name="dt_nascimento"
                    id="dt_nascimento" value="{{ $dt_nascimento }}">
                </div>
                <div class="form-group">
                    <label for="vl_mensalidade">Valor mensalidade</label>
                    <input type="text" class="form-control" name="vl_mensalidade"
                    id="vl_mensalidade" value="{{ $vl_mensalidade }}">
                </div>
                <div class="form-group">
                    <label for="id_modalidade">Modalidade</label>
                    <input type="text" class="form-control" name="id_modalidade"
                    id="id_modalidade" value="{{ $id_modalidade }}">
                </div>

				<input type="submit" class="btn btn-primary" value="Adicionar">
			@endif
        </form>        
    </div>
</div>

@stop