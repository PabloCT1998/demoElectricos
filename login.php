<?php
include ('includes/funciones.php');
if(llaveDefinida('user', $_POST) &&  llaveDefinida('password', $_POST)){

    if($_POST['user'] == '12345'){
        header("Location: formRequisicion.php");
    }else if($_POST['user'] == 'compras'){
        header("Location: verRequisiciones.php");
    }
}else{
  echo '<div><h1> Error </h1></div>';
  echo $_POST['numRequisicion'];

}
?>
