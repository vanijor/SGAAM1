@extends('adminlte::page')

@section('title', 'Cargo')

@section('content_header')
    <h1>Cargo</h1>

    <ol class="breadcrumb">
        <li><a href="">Admin</a></li>
        <li><a href="">Cargo</a></li>
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
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Salário</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Balconista</td>
                    <td>1000.00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Faxineiro</td>
                    <td>1000.00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Professor</td>
                    <td>1000.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@stop