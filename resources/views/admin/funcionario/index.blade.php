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
               
    </div>
    <div class="box-body table-bordered table-hover table-responsive no-padding">
        <table class="table table-hover">
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
                </tr>
                <tr>
                    <td>1</td>
                    <td>Jorge</td>
                    <td>11122233344</td>
                    <td>112223334</td>
                    <td>11340-340</td>
                    <td>Rua N,269-Jardim Glória-Praia Grande-SP</td>
                    <td>11-22-3333</td>
                    <td>35690000</td>
                    <td>email@email.com.br</td>
                    <td>Professor</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria</td>
                    <td>11122233344</td>
                    <td>112223334</td>
                    <td>11340-340</td>
                    <td>Rua N,269-Jardim Glória-Praia Grande-SP</td>
                    <td>11-22-3333</td>
                    <td>35690000</td>
                    <td>email@email.com.br</td>
                    <td>Balconista</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Joao</td>
                    <td>11122233344</td>
                    <td>112223334</td>
                    <td>11340-340</td>
                    <td>Rua N,269-Jardim Glória-Praia Grande-SP</td>
                    <td>11-22-3333</td>
                    <td>35690000</td>
                    <td>email@email.com.br</td>
                    <td>Faxineiro</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Carlos</td>
                    <td>11122233344</td>
                    <td>112223334</td>
                    <td>11340-340</td>
                    <td>Rua N,269-Jardim Glória-Praia Grande-SP</td>
                    <td>11-22-3333</td>
                    <td>35690000</td>
                    <td>email@email.com.br</td>
                    <td>Professor</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Roberto</td>
                    <td>11122233344</td>
                    <td>112223334</td>
                    <td>11340-340</td>
                    <td>Rua N,269-Jardim Glória-Praia Grande-SP</td>
                    <td>11-22-3333</td>
                    <td>35690000</td>
                    <td>email@email.com.br</td>
                    <td>Professor</td>
                </tr>
               
            </tbody>
        </table>
    </div>
</div>
@stop