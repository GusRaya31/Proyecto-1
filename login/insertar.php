<?php 

$conectar = mysqli_connect("localhost", "root", "","retho");
$resulta = mysqli_query($conectar, "SELECT * FROM usuarios");
$consulta = mysqli_fetch_array($resulta);
// Conectar base de datos 

 //datos a insertar en la base de datos
 $rfc = $_POST['RFC'];
 $curp = $_POST['CURP'];
 $nombre = $_POST['NOMBRE'];
 $contrasena = $_POST['CONTRASENA'];
// Insercion de datos a la base de datos
 mysqli_query($conectar, "INSERT INTO usuarios(RFC, CURP, NOMBRE, CONTRASEÑA) VALUES ('$rfc','$curp','$nombre','$contrasena')");
 header("location:tabla.php");
?>