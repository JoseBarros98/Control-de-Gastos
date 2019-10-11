<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <title> @yield('title')</title>
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
    font-size: 3.6em;
    text-align: center;
    margin-bottom: 20px;
  }
  
  a {
    color: #435160;
    text-decoration: none;
  }

  
  .login {
    width: 350px;
    position: absolute;
    top: 25%;
    left: 50%;
    margin-left: -175px;
  }
  .lista{
    font-size: 2em;
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
    width: 350px;
    height: 40px;
    border-radius: 3px;
    color: #fff;
    font-size: 12px;
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
  
  </style>
</head>
<body>


<div >
  <h3>Control de Gastos</h3>
  
  <nav class='login'>
        <ol class='lista'>
            <ul><a href="/gastos">Gastos</a></ul>
            <ul><a href="/gastos/create">Nuevo Gasto</a></ul>
            <ul><a href="/ingresos">Ingresos</a></ul>
            <ul><a href="/ingresos/create">Nuevo Ingreso</a></ul>
        </ol>
    </nav>

</body>
</html>
