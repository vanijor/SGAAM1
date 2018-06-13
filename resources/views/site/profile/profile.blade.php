@extends('site.layouts.app')

@section('title', 'Meu Perfil')

@section('content')
    <h1>Meu Perfil</h1>
    
    @include('admin.includes.alerts')

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Nome</label>
        <input type="text" class="form-control" value="{{ auth()->user()->name }}" name="name" id="name" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" value="{{ auth()->user()->email }}" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
        </div>
        <div class="form-group">
            <label for="image">Imagem: </label>
            @if (auth()->user()->image != null)
                <img src="{{ url('storage/users/'. auth()->user()->image) }}" alt="{{ auth()->user()->name }}" style="max-width: 50px;">
            @endif
            
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Atualizar Perfil</button>
        </div>
    </form>
@endsection