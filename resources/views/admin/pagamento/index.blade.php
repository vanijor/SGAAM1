@extends('adminlte::page')

@section('title', 'Pagamento')

@section('content_header')
    <h1>Pagamento</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Pagamento</a></li>
    </ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ route('pagamento.editar')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="box-body table-bordered table-hover table-responsive no-padding">
        @include('admin.includes.alerts')
        <table class="table table-hover">
        {!! csrf_field() !!}
        <thead>
            <tr>
                <th>Nome</th>
                <th>Mês referente</th>
                <th>Data de vencimento</th>
                <th>Valor Mensalidade</th>
                <th>Modalidade</th>
                <th class="text-center"><i class="fa fa-cog"></i> Ações</th>
            </thead>
        <tbody>
            @foreach ($pagamentos as $pagamento)
                <tr>
                    <td>{{ $pagamento->nome }}</td>
                    <td>{{ $pagamento->mes_referente }}</td>
                    <td>{{ $pagamento->dt_vencimento }}</td>
                    <td>{{ $pagamento->vl_mensalidade }}</td>
                    <td>{{ $pagamento->id_modalidade }}</td>
                    <td class="text-center">
                        <a class="btn btn-info " href="pagamento/editar/{{ $pagamento->id }}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="pagamento/excluir/{{ $pagamento->id }}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $pagamentos->links() !!}
    </div>
</div>

@stop