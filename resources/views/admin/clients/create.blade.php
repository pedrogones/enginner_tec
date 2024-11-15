@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
<h3></h3>
@stop

@section('content')

<div class="row">

    <div class="col-md-12">
        @include('shared.error-message')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Novo Cliente</h3>
            </div>
            <form action="{{route('client.store')}}" method="post">
                @csrf
                <div class="row p-2 mb-3 mt-2">
                    <div class="col-md-6 form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name='name'
                            id="name" placeholder="Digite um nome" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Digite um email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="password" id="senha"
                            placeholder="Digite a senha">
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="gender">Sexo</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="F">Feminino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="roles">Seu perfil</label>
                        <select class="js-basic-multiple form-control" name="roles[]" multiple="multiple">
                                 <option value="3">Cliente</option>
                           </select>
                    </div>
                </div>
                <div class="row mb-3 mt-2 p-2">
                    <div class="form-group col-sm-4 col-md-4 ">
                        <label for="street">Rua<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name='street'
                               id="street" placeholder="Digite sua rua" value="{{ old('street') }}" required>
                        @error('street')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-2 col-md-2 ">
                        <label for="number">Número<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('number') is-invalid @enderror" name="number"
                               id="number" placeholder="Número da sua residência" value="{{ old('number') }}" required>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-3 col-md-3 ">
                        <label for="cep">Cep<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('cep') is-invalid @enderror" name="cep"
                               id="cep" placeholder="Cep da sua localidade" value="{{ old('cep') }}" required>
                        @error('cep')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-3 col-md-3 ">
                        <label for="district">Bairro<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('district') is-invalid @enderror" name="district"
                               id="district" placeholder="Seu bairro" value="{{ old('district') }}" required>
                        @error('district')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6 col-md-6 ">
                        <label for="complement">Complemeto</label>
                        <input type="text" class="form-control @error('complement') is-invalid @enderror" name="complement"
                               id="complement" placeholder="Complemento" value="{{ old('complement') }}" required>
                        @error('complement')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-sm-4 col-md-4 ">
                        <label for="city">Cidade<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                               id="city" placeholder="Cidade" value="{{ old('city') }}" required>
                        @error('city')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-sm-2 col-md-2 ">
                        <label for="uf">Estado<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('uf') is-invalid @enderror" name="uf"
                               id="uf" placeholder="Estado" value="{{ old('uf') }}" required>
                        @error('uf')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-sm-2 col-md-2 ">
                        <label for="birthdate">Nascimento<span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                               id="uf" placeholder="Data de nascimento" value="{{ old('birthdate') }}" required>
                        @error('birthdate')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-sm-2 col-md-2 ">
                        <label for="phone">Telefone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                               id="phone" placeholder="Seu número de Telefone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-sm-2 col-md-2 ">
                        <label for="type_contact">Tipo de contato<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('type_contact') is-invalid @enderror" name="type_contact"
                               id="type_contact" value="telefoneResidencial" placeholder="Tipo de Contato" readonly>
                        @error('type_contact')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-sm-2 col-md-2 d-none">
                        <label for="type_attendance">Telefone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="type_attendance"
                               id="type_attendance" placeholder="Seu número de Telefone" value="atendimentoOnline" readonly>
                        @error('type_attendance')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{route('client.view')}}" type="button" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>

    </div>

</div>

@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-basic-multiple').select2({
                placeholder: 'Selecione os itens',
                width: '100%'
            });
        });
    </script>
@stop
