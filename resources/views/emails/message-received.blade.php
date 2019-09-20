<html>
<head>
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{ $msg['nombre'] }} - {{ $msg['email'] }}</p>
    <p><strong>Asunto:</strong>{{ $msg['asunto'] }}</p>
    <p><strong>Contenido:</strong>{{ $msg['contenido'] }}</p>
</body>
</html>