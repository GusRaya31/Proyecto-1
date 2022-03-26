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
    </tr>
<?php
}

?>