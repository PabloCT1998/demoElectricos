<?php
include ('includes/funciones.php');
session_start();

$num = $_SESSION['index'];
editarPartida($num);
function editarPartida($num){
    if(llaveDefinida('cantidad', $_POST)){
        $_SESSION['partida'][$num]['cantidad'] = $_POST['cantidad'];
    }
    if(llaveDefinida('articuloSAP', $_POST)){
        $_SESSION['partida'][$num]['articuloSAP'] = $_POST['articuloSAP'];
    }
    if(llaveDefinida('artProveedor', $_POST)){
        $_SESSION['partida'][$num]['artProveedor'] = $_POST['artProveedor'];
    }
    if(llaveDefinida('descripcion', $_POST)){
        $_SESSION['partida'][$num]['descripcion'] = $_POST['descripcion'];
    }
    if(llaveDefinida('UM', $_POST)){
        $_SESSION['partida'][$num]['UM'] = $_POST['UM'];
    }
    if(llaveDefinida('precioCompra', $_POST)){
        $_SESSION['partida'][$num]['precioCompra'] = $_POST['precioCompra'];
    }
    if(llaveDefinida('precioVenta', $_POST)){
        $_SESSION['partida'][$num]['precioCompra'] = $_POST['precioVenta'];
    }
    if(llaveDefinida('importeVenta', $_POST)){
        $_SESSION['partida'][$num]['importeVenta'] = $_POST['importeVenta'];
    }
    if(llaveDefinida('proveedor', $_POST)){
        $_SESSION['partida'][$num]['proveedor'] = $_POST['proveedor'];
    }
    if(llaveDefinida('comentario', $_POST)){
        $_SESSION['partida'][$num]['comentario'] = $_POST['comentario'];
    }
    if(llaveDefinida('importeCompra', $_POST)){
        $_SESSION['partida'][$num]['importeCompra'] = $_POST['importeCompra'];
    }
    if(llaveDefinida('estatusPartida', $_POST)){
        $_SESSION['partida'][$num]['estatusPartida'] = $_POST['estatusPartida'];
    }
    header("Location: crearPartida.php");
}
?>