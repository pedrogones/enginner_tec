@extends('adminlte::page')

@section('title', 'Novo Perfil')

@section('content_header')
<h1 class="m-0 text-dark">Novo Perfil</h1>
@stop

@section('content')

<div class="row">

    <div class="col-md-12">
        @include('shared.error-message')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Formulário</h3>
            </div>


            <form action="{{route('roles.store')}}" method="post">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name='name' id="name" placeholder="Digite um nome">
                    </div>

                    <div class="form-group">
                        <label for="email">Descrição</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Digite a descrição">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{route('roles.view')}}" type="button" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>


    </div>

</div>

@stop