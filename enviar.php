<?php
$servidor = "localhost";
$usuario = "root"; // Cambia esto según tus configuraciones
$contraseña = ""; // Deja esto en blanco si no has configurado contraseña
$base_de_datos = "informaticoslp_dom";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

if (!$conexion) {
   die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $dni = $_POST["dni"];
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   $telefono = $_POST["telefono"];
   $fecha = $_POST["fecha"];
   $reclamo = $_POST["reclamo"];

   $sql = "INSERT INTO contactanos (dni, nombre, email, telefono, fecha, reclamo) VALUES ('$dni', '$nombre', '$email', '$telefono', '$fecha', '$reclamo')";

   if (mysqli_query($conexion, $sql)) {
       echo "Datos insertados correctamente.";
   } else {
       echo "Error al insertar datos: " . mysqli_error($conexion);
   }
}

mysqli_close($conexion);
?>
