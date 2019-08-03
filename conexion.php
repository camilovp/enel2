<?php
$mysqli = mysqli_connect("localhost", "root", "", "codensaBD");
    if(mysqli_connect_errno()){
        echo "conexion fallida", mysqli_connect_errno();
    }
?>