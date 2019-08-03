<?php
require ("conexion.php");
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$sql="SELECT * FROM usuarios WHERE nombre = '$nombre' AND contrasena = '$password'";
$resultado = mysqli_query($mysqli, $sql);
$num_fila = mysqli_num_rows($resultado);
if($num_fila==1){
    session_start();
    $_SESSION["usuario"]=$nombre;
    $_SESSION["conectado"]='true';
    $respuesta = $_SESSION['usuario'];
    echo $respuesta;
}else{
    echo "usuario no registrado";
}
?>