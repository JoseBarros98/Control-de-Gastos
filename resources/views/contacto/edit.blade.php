@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Actualizar Contacto</h1>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif
         <form method="post" action="{{ route('contacto.update',$contacto->id) }}">
             @csrf
             @method('PUT')
             <div class="form-group">    
                 <label for="nombre">Nombre:</label>
                 <input type="text" class="form-control" name="nombre" value="{{$contacto->nombre}}"/>
             </div>
   
             <div class="form-group">
                 <label for="apellido">Apellido:</label>
                 <input type="text" class="form-control" name="apellido" value="{{$contacto->apellido}}"/>
             </div>
   
             <div class="form-group">
                 <label for="ci">Cedula de Identidad:</label>
                 <input type="text" class="form-control" name="ci" value="{{$contacto->ci}}"/>
             </div>
             <div class="form-group">
                 <label for="direccion">Direccion:</label>
                 <input type="text" class="form-control" name="direccion" value="{{$contacto->direccion}}"/>
             </div>
             <div class="form-group">
                 <label for="celular">Celular:</label>
                 <input type="text" class="form-control" name="celular" value="{{$contacto->celular}}"/>
             </div>
                                      
             <button type="submit" class="btn btn-primary-outline">Actualizar Contacto</button>
         </form>
     </div>
   </div>
   </div>

@endsection