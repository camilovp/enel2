<?php
    session_start();
    if (isset($_SESSION['conectado']) && $_SESSION['conectado']=='true'){
        $response='true';
    }else {
        $response ='false';
    }

    echo json_encode($response);
?>