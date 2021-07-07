@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{url('clientes')}}"> Voltar </a>
                </div>
                
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Cadastro de clientes</h1>

                    <!-- Formulario com validação, só é visto ao editar $cliente --> 

                    @if ( Request::is('*/edit'))

                    <form action="{{ url('clientes/update')}}/{{$cliente->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nome :</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome completo" value="{{$cliente->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">E-mail:</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ $cliente->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Descrição:</label>
                            <input type="text" name="descricao" class="form-control" placeholder="Insira a descrição do cliente." value="{{ $cliente->descricao}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Status:</label>
                            <input type="text" name="status" class="form-control" placeholder="Insira o status do cliente." value="{{ $cliente->status}}"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Rua exemplo, numero - Cidade, Estado." value="{{ $cliente->endereco}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Telefone:</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Insira o telefone do cliente." value="{{ $cliente->telefone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Celular:</label>
                            <input type="text" name="celular" class="form-control" placeholder="Insira o celular do cliente." value="{{ $cliente->celular}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                        
                        @else

                        <form action="{{ url('clientes/add') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nome :</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome completo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Descrição:</label>
                            <input type="text" name="descricao" class="form-control" placeholder="Insira a descrição do cliente.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Status:</label>
                            <input type="text" name="status" class="form-control" placeholder="Insira a descrição do cliente.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Rua exemplo, numero - Cidade, Estado.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Telefone:</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Insira a descrição do cliente.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Celular:</label>
                            <input type="text" name="celular" class="form-control" placeholder="Insira a descrição do cliente.">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection