<?php
include ('includes/funciones.php');
session_start();

$numReq = $_SESSION['indexReq'];

editarReq($numReq);
function editarReq($numReq){
    if(llaveDefinida('numRequisicion', $_POST)){
        $_SESSION['requisicion'][$numReq]['encabezado']['numRequisicion'] = $_POST['numRequisicion'];
    }
    if(llaveDefinida('fechaRequisicion', $_POST)){
        $_SESSION['requisicion'][$numReq]['encabezado']['fechaRequisicion'] = $_POST['fechaRequisicion'];
    }
    if(llaveDefinida('vendedor', $_POST)){
        $_SESSION['requisicion'][$numReq]['encabezado']['vendedor'] = $_POST['vendedor'];
    }
    if(llaveDefinida('comprador', $_POST)){
        $_SESSION['requisicion'][$numReq]['encabezado']['comprador'] = $_POST['comprador'];
    }
    if(llaveDefinida('emailComprador', $_POST)){
        $_SESSION['requisicion'][$numReq]['encabezado']['emailComprador'] = $_POST['emailComprador'];
    }
    if(llaveDefinida('estatusReq', $_POST)){
        $_SESSION['requisicion'][$numReq]['encabezado']['estatusReq'] = $_POST['estatusReq'];
    }
    
    header("Location: verRequisiciones.php");
}
?>
