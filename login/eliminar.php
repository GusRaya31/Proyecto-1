<?php
include_once("tabla.php");
 
$id = $_GET['ID'];
 
mysqli_query($conn, "DELETE FROM usuarios WHERE ID='$id'");
 
header("Location:tabla.php");

?>