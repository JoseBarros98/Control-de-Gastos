@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Actualizar Ingreso</h1>
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
         <form method="post" action="{{ route('ingreso.update',$ingreso->id) }}">
             @csrf
             @method('PUT')
             <div class="form-group">    
                 <label for="nombre">Nombre:</label>
                 <input type="text" class="form-control" name="nombre" value="{{$ingreso->nombre}}"/>
             </div>
   
             <div class="form-group">
                 <label for="descripcion">Descripcion:</label>
                 <input type="text" class="form-control" name="descripcion" value="{{$ingreso->descripcion}}"/>
             </div>
   
             <div class="form-group">
                 <label for="fecha">Fecha:</label>
                 <input type="date" class="form-control" name="fecha" value="{{$ingreso->fecha}}"/>
             </div>
             <div class="form-group">
                 <label for="monto">Monto:</label>
                 <input type="text" class="form-control" name="monto" value="{{$ingreso->monto}}"/>
             </div>
                                      
             <button type="submit" class="btn btn-primary-outline">Actualizar Ingreso</button>
         </form>
     </div>
   </div>
   </div>

@endsection