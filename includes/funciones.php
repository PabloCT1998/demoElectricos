<?php
  /**
   * Autor: Pablo Castañeda Trinidad
   * Fecha de creación: 02/03/2023
   * Descripción: Funciones para la aplicacionón
   */

   /**
   * Verifica si una variable está definida y contiene un valor distinto a nulo ó vacío
   * @param any $value
   * @return boolean
  */
   function definido($value) {
    return (isset($value) && $value !== '');
  }
  /**
   * Verifica si llave está definida dentro de un array u objeto y si contiene un valor distinto a nulo ó vacío
   * @param any $key
   * @param array $array
   * @return boolean
  */
  function llaveDefinida($key, $array) {
    return array_key_exists($key, $array) && definido($array[$key]);
  }
?>