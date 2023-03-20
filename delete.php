<?php
require 'db.php';
$idDelet=$_POST["idDelet"];
    $con = mysqli_connect('localhost', 'Root', '', 'bibliothèque');
    $sql="DELETE FROM Ouvrage WHERE ID_ouvrage = '$idDelet'";
    if(mysqli_query( $con,$sql)){
        header("location:reservé.php");

    }




?>