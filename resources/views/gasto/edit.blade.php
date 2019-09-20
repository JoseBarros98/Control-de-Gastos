@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Actualizar Gasto</h1>
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
         <form method="post" action="{{ route('gasto.update',$gasto->id) }}">
             @csrf
             @method('PUT')
             <div class="form-group">    
                 <label for="nombre">Nombre:</label>
                 <input type="text" class="form-control" name="nombre" value="{{$gasto->nombre}}"/>
             </div>
   
             <div class="form-group">
                 <label for="descripcion">Descripcion:</label>
                 <input type="text" class="form-control" name="descripcion" value="{{$gasto->descripcion}}"/>
             </div>
   
             <div class="form-group">
                 <label for="fecha">Fecha:</label>
                 <input type="date" class="form-control" name="fecha" value="{{$gasto->fecha}}"/>
             </div>
             <div class="form-group">
                 <label for="monto">Monto:</label>
                 <input type="text" class="form-control" name="monto" value="{{$gasto->monto}}"/>
             </div>
                                      
             <button type="submit" class="btn btn-primary-outline">Actualizar Gasto</button>
         </form>
     </div>
   </div>
   </div>

@endsection