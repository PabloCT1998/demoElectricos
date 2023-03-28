<?php
include ('includes/funciones.php');
session_start();

$num = $_POST['partida'];
borrarPartida($num);
function borrarPartida($num){
    if(llaveDefinida('encabezado', $_SESSION)){
        if(llaveDefinida('partida', $_SESSION)){
            unset($_SESSION['partida'][$num]);
            $partidas= [];
            foreach($_SESSION['partida'] as $p){
                array_push($partidas, $p);
            }
            $_SESSION['partida'] = $partidas;
        }else{
    }
}else{
  header("Location: error.html");
}
header("Location: crearPartida.php");
}
?>