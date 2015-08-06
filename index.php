<?php
define('DS', DIRECTORY_SEPARATOR);
define('WWW', dirname(__FILE__).DS.'src'.DS);
require_once('src/TMO/autoload.php');
require_once 'src/TMO/Dados/dados_clientes.php';

include_once 'public/topo.php';

if(isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    include_once 'public/cliente.php';
}else {
    include_once 'public/index.php';
}
?>