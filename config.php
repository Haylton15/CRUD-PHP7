<?php 

	/*um arquivo de configurações, que vai guardar todos os dados que vão ser usados em todos os outros scritps PHP do sistema.*/

	/**O nome do banco de dados*/
	define('DB_NAME', 'wda_crud');
	
	/**Usuário do banco de dados MySQL*/
	define('DB_USER', 'root');

	/**Senha do banco de dados MySQL*/
	define('DB_PASSWORD', '');

	/**nome do host do MySQL*/
	define('DB_HOST', 'localhost');

	/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/CRUD-PHP7/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

/**camjnhos dos templates de header e footer*/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>