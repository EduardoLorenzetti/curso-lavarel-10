@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Produtos</h5>
              <p class="card-text">Total de prdutos cadastrados.</p>
              <a href="{{ route('produto.index') }}" class="btn btn-primary">{{$totalProdutos}}</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Clientes</h5>
              <p class="card-text">Total de clientes cadastrados.</p>
              <a href="{{ route('clientes.index') }}" class="btn btn-primary">{{$totalClientes}}</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vendas</h5>
              <p class="card-text">Total de vendas cadastradas.</p>
              <a href="{{route('vendas.index')}}" class="btn btn-primary">{{$totalVendas}}</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Usuarios</h5>
              <p class="card-text">Total de usuario cadastrados.</p>
              <a href="{{route('usuario.index')}}" class="btn btn-primary">{{$totalUsuario}}</a>
            </div>
          </div>
        </div>
      </div>
@endsection