<?php
include ('includes/funciones.php');
session_start();

$numReq = $_SESSION['indexReq'];
$numP = $_SESSION['indexP'];
editarPartida($numReq, $numP);
function editarPartida($numReq, $numP){
    if(llaveDefinida('cantidad', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['cantidad'] = $_POST['cantidad'];
    }
    if(llaveDefinida('articuloSAP', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['articuloSAP'] = $_POST['articuloSAP'];
    }
    if(llaveDefinida('artProveedor', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['artProveedor'] = $_POST['artProveedor'];
    }
    if(llaveDefinida('descripcion', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['descripcion'] = $_POST['descripcion'];
    }
    if(llaveDefinida('UM', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['UM'] = $_POST['UM'];
    }
    if(llaveDefinida('precioCompra', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['precioCompra'] = $_POST['precioCompra'];
    }
    if(llaveDefinida('precioVenta', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['precioVenta'] = $_POST['precioVenta'];
    }
    if(llaveDefinida('importeVenta', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['importeVenta'] = $_POST['importeVenta'];
    }
    if(llaveDefinida('proveedor', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['proveedor'] = $_POST['proveedor'];
    }
    if(llaveDefinida('comentario', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['comentario'] = $_POST['comentario'];
    }
    if(llaveDefinida('importeCompra', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['importeCompra'] = $_POST['importeCompra'];
    }
    if(llaveDefinida('estatusPartida', $_POST)){
        $_SESSION['requisicion'][$numReq]['partida'][$numP]['estatusPartida'] = $_POST['estatusPartida'];
    }
    header("Location: verReq.php");
}
?>
