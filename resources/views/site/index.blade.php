@extends('layouts.base')

@section('conteudo')
    
    <div class="container-sm">
        <div class="formLogin">
            <form class="form-signin" method="post" action="{{ route('site.logar') }}">
                @csrf
                <img class="mb-4" src="" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Logar no sistema</h1>
                <div class="form-group">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de usuário">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
            </form>
        </div>
    </div>
    
@endsection