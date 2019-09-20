@extends('layout.layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BILLETERA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ route('contacto.index')}}">CONTACTOS <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{ route('ingreso.index')}}">INGRESOS</a>
      <a class="nav-item nav-link" href="{{ route('gasto.index')}}">GASTOS</a>
    </div>
  </div>
</nav>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Contactos</h1>    
      <table class="table table-striped">
        <thead>
            <tr>
              <td>Nombre y Apellido</td>  
              <td>Cedula de Identidad</td>
              <td>Direccion</td>
              <td>Celular</td>
              <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $contacto)
            <tr>
                <td>{{$contacto->nombre}} {{$contacto->apellido}}</td>
                <td>{{$contacto->ci}}</td>
                <td>{{$contacto->direccion}}</td>
                <td>{{$contacto->celular}}</td>
                <td>
                    <a href="{{ route('contacto.edit',$contacto->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('contacto.destroy', $contacto->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <a href="{{ route('contacto.create')}}" class="btn btn-primary">Nuevo</a>
        </tbody>
      </table>
    <div>
    </div>
    
@endsection