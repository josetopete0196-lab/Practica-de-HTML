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
    require('conexion.php');

    if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $nombre = $_POST['nombre'];
     $correo = $_POST['correo'];
      $fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];

        $sql = "INSERT INTO personas (nombre, correo, fecha_de_nacimiento)
                   VALUES ('$nombre', '$correo', '$fecha_de_nacimiento')";
                     $conn->exec($sql);


                     $stmt = $conn->query("SELECT * FROM personas");
                     $personas = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($personas as $persona){
           echo "<p>Nombre: " . $persona['nombre'] . ", Correo: " . $persona['correo'] . ", Fecha de nacimiento: " . $persona['fecha_de_nacimiento'] . "</p>";
      }
    }else{
        echo "<p>No es una peticion tipo POST.</P>";
 }
 ?>
</body> 
</html> 