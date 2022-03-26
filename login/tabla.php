<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
    <link rel="stylesheet" href="tabla.css">
    
</head>
<body>
    <div>
        <h3>TABLA DE EJEMPLOS</h3>
    </div>
    <br>

    <div id="mensaje"></div>
    
    <br>


    <div id="listado">
        <nav  id="menu">
           <a href="añadir.php">Agregar</a>
            
            <!-- tipo modal es el que le da prioridad -->
        </nav>
    </div>

    <table id =tabla>
        <thead>
            <th>ID</th>
            <th>RFC</th>
            <th>CURP</th>
            <th>NOMBRE</th>
            <th>CONTRASEÑA</th>
            <th></th>
            <th></th>
        </thead>

        <?php 

//Conectamos a la base de datos 
$conectar = mysqli_connect("localhost","root","","retho");

$resulta =  mysqli_query($conectar,"SELECT * FROM USUARIOS");

while($mostar = mysqli_fetch_array($resulta)){
    ?>
    <tr>
        <td><?php echo $mostar['ID']?></td>
        <td><?php echo $mostar['RFC']?></td>
        <td><?php echo $mostar['CURP']?></td>
        <td><?php echo $mostar['NOMBRE']?></td>
        <td><?php echo $mostar['CONTRASEÑA']?></td>
        <td><a href="eliminar.php">Eliminar</a></td>
        <td><a href="editar.php"
        rfc=<?php  echo $mostar['RFC'] ?> &
        curp=<?php  echo $mostar['CURP'] ?> &
        nombre=<?php  echo $mostar['NOMBRE'] ?> &
        contraseña=<?php  echo $mostar['CONTRASEÑA'] ?> &
        
        >Editar</a></td>
    </tr>
<?php
}



?>
        </tbody>
    </table>
</body>
</html>