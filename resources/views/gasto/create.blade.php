@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Nuevo Gasto</h1>
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
         <form method="post" action="{{ route('gasto.store') }}">
             @csrf
             <div class="form-group">    
                 <label for="nombre">Nombre:</label>
                 <input type="text" class="form-control" name="nombre"/>
             </div>
   
             <div class="form-group">
                 <label for="descripcion">Descripcion:</label>
                 <input type="text" class="form-control" name="descripcion"/>
             </div>
   
             <div class="form-group">
                 <label for="fecha">Fecha:</label>
                 <input type="date" class="form-control" name="fecha"/>
             </div>
             <div class="form-group">
                 <label for="monto">Monto:</label>
                 <input type="text" class="form-control" name="monto"/>
             </div>                                      
             <button type="submit" class="btn btn-primary-outline">Agregar Gasto</button>
         </form>
     </div>
   </div>
   </div>

@endsection