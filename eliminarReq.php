<?php
include ('includes/funciones.php');
session_start();
$num = $_POST['req'];
borrarReq($num);
function borrarReq($num){
    unset($_SESSION['requisicion'][$num]);
    $requisiciones= [];
    foreach($_SESSION['requisicion'] as $r){
        array_push($requisiciones, $r);
    }
    $_SESSION['requisicion'] = $requisiciones;
       
header("Location: verRequisiciones.php");
}
?>
