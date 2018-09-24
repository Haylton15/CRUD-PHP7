<?php 
/**Esse arquivo vai receber a chamada do JavaScript junto com o ID do cliente, e executará a exclusão. Vindo de main.js*/
 require_once('functions.php'); 
  if (isset($_GET['id'])){
    delete($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
    }

?>