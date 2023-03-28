<?php
include ('includes/funciones.php');
if(llaveDefinida('user', $_POST) &&  llaveDefinida('password', $_POST)){

        header("Location: formRequisicion.php");
}else{
  echo '<div><h1> Error </h1></div>';
  echo $_POST['numRequisicion'];

}
?>
