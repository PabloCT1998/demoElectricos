<?php
include ('includes/funciones.php');
session_start();

$numP = $_POST['partida'];
$numReq = $_SESSION['indexReq'];
print_r($_SESSION['requisicion'][$numReq]['partida'][$numP]);

borrarPartida($numReq, $numP);
function borrarPartida($numReq, $numP){
    if(llaveDefinida('partida', $_SESSION)){
        unset($_SESSION['requisicion'][$numReq]['partida'][$numP]);
        $partidas= [];
        foreach($_SESSION['requisicion'][$numReq]['partida']as $p){
            array_push($partidas, $p);
        }
        $_SESSION['partida'] = $partidas;
        }

header("Location: verReq.php");
}
?>