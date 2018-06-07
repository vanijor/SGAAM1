@extends('adminlte::page')

@section('title', 'Plano')

@section('content_header')
    <h1>Plano</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Plano</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('plano.editar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="box-body">
        @include('admin.includes.alerts')
        <table class="table table-bordered table-hover table-responsive">
        {!! csrf_field() !!}
        <thead>
            <tr>
                <th>Tipo de Pagamento</th>
                <th>Forma de Pagamento</th>
                <th>Modalidade</th>
                <th class="text-center"><i class="fa fa-cog"></i> Ações</th>
            </thead>
        <tbody>
            @foreach($planos as $plano)
                <tr>
                    <td>{{ $plano->tipo }}</td>
                    <td>{{ $plano->forma_pagamento }}</td>
                    <td>{{ $plano->typeModa($plano->modalidade_id) }}</td>
                    <td class="text-center">
                        <a class="btn btn-info " href="plano/editar/{{ $plano->id }}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="plano/excluir/{{ $plano->id }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $planos->links() !!}
    </div>
</div>
@stop
