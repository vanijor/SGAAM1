@extends('adminlte::page')

@section('title', 'Plano')

@section('content_header')
@if (isset($id))
    <h1>Editar Plano</h1>
@else
    <h1>Adicionar Plano</h1>
@endif
<ol class="breadcrumb">
    <li><a href="">Admin</a></li>
    <li><a href="">Plano</a></li>
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
            @if(isset($id))
                <div class="form-group col-xs-4">
                    <label for="tipopgto">Tipo de Pagamento</label>
                    <select name="tipopgto" id="tipopgto" class="form-control">
                        <option>Selecione a Forma de Pagamento</option>
                        <option value="mensal"
                        @if($planos->tipo == 'mensal')
                            selected = 'selected'
                        @endif
                        >Mensal</option>
                        <option value="trimestral"
                        @if($planos->tipo == 'trimestral')
                            selected = 'selected'
                        @endif
                        >Trimestral</option>
                        <option value="anual"
                        @if($planos->tipo == 'anual')
                            selected = 'selected'
                        @endif
                        >Anual</option>
                    </select>
                </div>
                
                <div class="form-group col-xs-4">
                    <label for="formapgto">Forma de Pagamento</label>
                    <select name="formapgto" id="formapgto" class="form-control">
                        <option>Selecione a Forma de Pagamento</option>
                        <option value="credito"
                        @if($planos->forma_pagamento == 'credito')
                            selected = 'selected'
                        @endif
                        >Crédito</option>
                        <option value="debito"
                        @if($planos->forma_pagamento == 'debito')
                            selected = 'selected'
                        @endif
                        >Débito</option>
                        <option value="dinheiro"
                        @if($planos->forma_pagamento == 'dinheiro')
                            selected = 'selected'
                        @endif
                        >Dinheiro</option>
                    </select>
                </div>

                <div class="form-group col-xs-4">
                    <label for="modalidade">Modalidade</label>
                    <select name="modalidade" id="modalidade" class="form-control">
                        <option>Selecione a Modalidade</option>
                            @foreach($modalidades as $modalidade)
                            <option value="{{ $modalidade->id }}"
                            @if($modalidade->id == $planos->modalidade_id)
                            selected = 'selected'
                            @endif
                            >{{ $modalidade->nome }}</option>
                            @endforeach
                    </select>
                </div>                
				<input type="submit" class="btn btn-primary" value="Editar">

            @else
                 <div class="form-group col-xs-4">
                    <label for="tipopgto">Tipo de Pagamento</label>
                    <select name="tipopgto" id="tipopgto" class="form-control">
                        <option>Selecione o Tipo de Plano</option>
                        <option value="mensal">Mensal</option>
                        <option value="trimestral">Trimestral</option>
                        <option value="anual">Anual</option>
                    </select>
                </div>
                <div class="form-group col-xs-4">
                    <label for="formapgto">Forma de Pagamento</label>
                    <select name="formapgto" id="formapgto" class="form-control">
                    <option >Selecione a Forma de Pagamento</option>
                        <option value="credito">Crédito</option>
                        <option value="debito">Débito</option>
                        <option value="dinheiro">Dinheiro</option>
                    </select>
                </div>
            <div class="form-group col-xs-4">
                 <label for="modalidade">Modalidade</label>
                    <select name="modalidade" id="modalidade" class="form-control">
                        <option>Selecione a Modalidade</option>
                            @foreach($modalidades as $modalidade)
                        <option value="{{ $modalidade->id }}">{{ $modalidade->nome }}</option>
                            @endforeach
                    </select>
            </div>
            </hr>
				<input type="submit" class="btn btn-primary" value="Adicionar">
			@endif
        </form>        
    </div>
</div>

@stop