<?php 
 /**todas as funções das telas de cadastro de clientes*/
 require_once('../config.php');
 require_once(DBAPI);

/**variáveis globais. customers irá guardar a lista de clientes e customer irá guardar o cliente que está passando por create ou update e delete*/
 $customers = null;
 $customer = null;


/**
	Listagem dos clientes
*/

	function index(){
		global $customers;
		$customers = find_all('customers');
	}

?>

<?php 
/**
	Cadastro de clientes
*/
	if(!empty($_POST['customer'])){
		$today = 
			date_create('now', new DateTimeZone('America/Sao_Paulo'));

		$customer = $_POST['customer'];
		$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");

		save('customers', $customer);
		header('location:index.php');
	}

 ?>
 <?php
/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('customers', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('customers', $id);
    } 
  } else {
    header('location: index.php');
  }
}