<?php
    require ("conexion.php");
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select= "SELECT id FROM usuarios WHERE email='$email'";
    $consulta = mysqli_query($mysqli, $select);
    $num_fila = mysqli_num_rows($consulta);
if ($num_fila==0) {
    $sql="INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$password')";
    $resultado = mysqli_query($mysqli, $sql);
    if ($resultado===TRUE) {
        echo "usuario ingresado";
    }else{
        echo "error".mysqli_error($resultado);
    }
} else {
    echo "usuario ya creado";
}

    
?>