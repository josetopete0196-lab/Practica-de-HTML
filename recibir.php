<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>
<body>
    <h1>Se guardaron las respuestas</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $nombre = $_POST['nombre'];
     $correo = $_POST['correo'];
      $fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];

      echo "<h2>Datos recibidos:</h2>";
      echo "<p>Nombre: " . $nombre . "</p>";
      echo "<p>Correo: " . $correo . "</p>";
      echo "<p>Fecha de nacimiento: " . $fecha_de_nacimiento . "</p>";
    }else{
        echo "<p>No es una peticion tipo POST.</P>";
 }
 ?>
</body> 
</html>