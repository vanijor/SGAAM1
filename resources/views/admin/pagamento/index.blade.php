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
    <div class="box-body">
        @include('admin.includes.alerts')
        <table class="table table-bordered table-hover table-responsive">
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
                    <td>{{ $pagamento->typeAluno($pagamento->id_aluno) }}</td>
                    <td>{{ \Carbon\Carbon::parse($pagamento->mes_referente)->format('m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($pagamento->dt_vencimento)->format('d/m/Y') }}</td>
                    <td>{{ $pagamento->vl_mensalidade }}</td>
                    <td>{{ $pagamento->typeModa($pagamento->id_modalidade) }}</td>
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
