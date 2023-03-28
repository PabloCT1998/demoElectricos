<?php
include ('includes/funciones.php');
session_start();
if(llaveDefinida('encabezado', $_SESSION)){
    $requisicion = $_SESSION['encabezado'];
    if(llaveDefinida('partida', $_SESSION)){
      array_push($_SESSION['partida'], $_POST);
    }else{
      $_SESSION['partida'] = array($_POST);
    }
    header("Location: crearPartida.php");
}else{
    header("Location: error.html");
}


?>