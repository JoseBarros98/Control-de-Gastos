<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
{
$message = request()->validate([
'nombre'=>'required',
'apellido'=>'required',
'ci'=>'required',
'direccion'=>'required',
'celular'=>'required'
],[
'nombre.required'=>__('Necesito tu Nombre')
]);

Mail::to('barrosrojasjoserodolfo90@gmail.com')->queue(new MessageReceived($message));


//return new MessageReceived($message);
return 'Mensaje Enviado';
}
}
