<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Mensaje de contacto</title>
</head>
<body>
    <p>Hola! Se ha enviado un mensaje {{ $distressCall->created_at }}.</p>
    <p>Estos son los datos del usuario que ha enviado el mensaje:</p>
    <ul>
        <li>Nombre: {{ $distressCall->nombre }}</li>
        <li>Email: {{ $distressCall->email }}</li>
        <li>Mensaje: {{ $distressCall->mensaje }}</li>
        <li>Archivo: {{ $distressCall->archivo }}</li>
    </ul>
   
</body>
</html>
