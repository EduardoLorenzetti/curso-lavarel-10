@extends('index')

@section('content')
    <form class="form" method="POST" action="{{ route('cadastrar.cliente') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastrar novo cliente</h1>
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" value="{{ old('nome') }}" class="form-control @error('nome') is-invalid @enderror"
                name="nome">
            @if ($errors->has('nome'))
                <div class="invalid-feedback"> {{ $errors->first('nome') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                name="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">CEP</label>
            <input id="cep" value="{{ old('CEP') }}" class="form-control @error('CEP') is-invalid @enderror"
                name="CEP">
            @if ($errors->has('CEP'))
                <div class="invalid-feedback"> {{ $errors->first('CEP') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Endereco</label>
            <input id="endereco" value="{{ old('endereco') }}" class="form-control @error('endereco') is-invalid @enderror"
                name="endereco">
            @if ($errors->has('endereco'))
                <div class="invalid-feedback"> {{ $errors->first('endereco') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Logradouro</label>
            <input id="logradouro" value="{{ old('logradouro') }}" class="form-control @error('logradouro') is-invalid @enderror"
                name="logradouro">
            @if ($errors->has('logradouro'))
                <div class="invalid-feedback"> {{ $errors->first('logradouro') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Bairro</label>
            <input id="bairro" value="{{ old('bairro') }}" class="form-control @error('bairro') is-invalid @enderror"
                name="bairro">
            @if ($errors->has('bairro'))
                <div class="invalid-feedback"> {{ $errors->first('bairro') }} </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
