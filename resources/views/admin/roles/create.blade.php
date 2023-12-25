@extends('adminlte::page')

@section('title', 'Novo Perfil')

@section('content_header')
<h3></h3>
@stop

@section('content')

<div class="row">

    <div class="col-md-12">
        @include('shared.error-message')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Novo Perfil</h3>
            </div>


            <form action="{{route('roles.store')}}" method="post">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name='name'
                            id="name" placeholder="Digite um nome" value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control @error('descricao') is-invalid @enderror"
                            name="descricao" id="descricao" placeholder="Digite a descrição"
                            value="{{ old('descricao') }}">
                        @error('descricao')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card card-default">
                        
                        <div class="card-header">
                            <h3 class="card-title">Associar permissões ao perfil</h3>
                        </div>
                        
                            <select multiple="multiple" size="10" name="permissions[]"
                                title="permissions[]" id="permissions">

                                @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}" selected>{{ $permission->name }}</option>
                                @endforeach
                            </select>
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


@section('js')
    <script>
        var demo1 = $('select[name="permissions[]"]').bootstrapDualListbox({
            moveSelectedLabel: 'Selecionar',
            moveAllLabel: 'Selecionar todos',
            infoText: 'Exibindo {0}',
            infoTextEmpty: 'Lista vazia'
        });
    </script>
@stop