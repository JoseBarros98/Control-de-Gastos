<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
 <title>Contacto</title>

 <style>
  * {
    margin: 0;
    padding: 0;
  }
  
  body {
    background: white;
    color: #435160;
    font-family: "Open Sans", sans-serif;
  }
  
  h3 {
    color: #6D7781;
    font-family: "Sofia", cursive;
    font-size: 15px;
    font-weight: bold;
    font-size: 2.5em;
    text-align: center;
    margin-bottom: 20px;
  }
  h5 {
    color: #6D7781;
    font-family: "Sofia", cursive;
    font-size: 15px;
    font-weight: bold;
    font-size: 1.5em;
    text-align: center;
    margin-bottom: 20px;
  }
  
  
  a {
    color: #435160;
    text-decoration: none;
  }
  .nav{
    font-size:1.5em;
    font-family:"Sofia";
  }
  
  .login {
    width: 350px;
    position: absolute;
    top: 10%;
    left: 50%;
    margin-left: -175px;
  }
  
  
  input[type="text"], input[type="date"] {
    width: 350px;
    padding: 20px 0px;
    background: transparent;
    border: 0;
    border-bottom: 1px solid #435160;
    outline: none;
    color: #6D7781;
    font-size: 16px;
  }
  input[type=checkbox] {
    display: none;
  }
  
  label {
    display: block;
    position: absolute;
    margin-right: 10px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: transparent;
    content: "";
    transition: all 0.3s ease-in-out;
    cursor: pointer;
    border: 3px solid #435160;
  }
  
  #agree:checked ~ label[for=agree] {
    background: #435160;
  }
  
  input[type="submit"] {
    background: #1FCE6D;
    border: 0;
    width: 150px;
    height: 40px;
    border-radius: 3px;
    color: #fff;
    font-size: 12px;
    float: right;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
  }
  #edit{
    background: #FFE633;
    border: 0;
    width: 150px;
    height: 40px;
    border-radius: 3px;
    color: #fff;
    font-size: 12px;
    float: right;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
  }
  #eliminar{
    background: #A41400;
    border: 0;
    width: 150px;
    height: 40px;
    border-radius: 3px;
    color: #fff;
    font-size: 12px;
    float: right;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
  }
  
  input[type="submit"]:hover {
    background: #16aa56;
    animation-name: shake;
  }
  
  .forgot {
    margin-top: 30px;
    display: block;
    font-size: 11px;
    text-align: center;
    font-weight: bold;
  }
  .forgot:hover {
    margin-top: 30px;
    display: block;
    font-size: 11px;
    text-align: center;
    font-weight: bold;
    color: #6D7781;
  }
  #main-container{
  margin:25px auto;
  width 600px;

  }

  table{
  text-align: left;
  border-collapse: collapse;
  width 100;

  }

  th, td{
  padding:20px;
  }

  thead{
  background-color: #16aa56;
  border: solid 5px #16aa56;
  color:white
  }

  tr:nth-child(even){
  background-color: #ddd;
  }

  tr:hover td{
  background-color: #369681;
  color: white;
  }
  
  
  ::-webkit-input-placeholder {
    color: #435160;
    font-size: 12px;
  }
  
  .animated {
    animation-fill-mode: both;
    animation-duration: 1s;
  }
  
  @keyframes shake {
    0%, 100% {
      transform: translateX(0);
    }
    10%, 30%, 50%, 70%, 90% {
      transform: translateX(-10px);
    }
    20%, 40%, 60%, 80% {
      transform: translateX(10px);
    }
  }
  #menu{
  background-color: #000;
  }

    #menu ul{
      list-style: none;
      margin: 0;
      padding: 0;clip-path: 
    }

    #menu ul li{
      display: inline-block;
    }

    #menu ul li a{
      color: white;
      display: block;
      padding: 20px 20px;
      text-decoration: none;
    }

    #menu ul li a:hover{
      background-color: #42B881;
    }
    
  </style>
</head>
<body>

@if(session('success_message'))
    <div class="alert alert-success">
    {{ session ('success_message')}}
    </div>
@endif

<div class='login'>  

  <h3>Enviar mensaje </h3>

  <form method="POST" action="{{ route('contacto.store') }}">
  @csrf
  <div class="form-control">
    <input name='name' placeholder='Nombre' type='text' >
  </div>
  <div class="form-control">
    <input  name='email' placeholder='E-mail' type='email'>
  </div>  
  <div class="form-control">
    <input name='subject' placeholder='Asunto' type='text'> 
  </div>
  <div class="form-control">
    <textarea name="content" placeholder="Mensaje..."></textarea>
  </div>

   <center> <input class='animated' type='submit' value='Enviar'></center>
  </form>
</div>

<div id="menu">
 <ul>
  
   <li>Billetera Web </li>
   <li><a href="/gasto">Gastos</a></li>
   <li><a href="/ingreso">Ingresos</a></li>
   <li><a href="/contacto">Contacto</a></li>
   <li><a href="{{url('logout')}}">Cerrar sesion</a></li>
  </li>
 </ul>
</div>
@include('sweetalert::alert')


</body>
</html>
