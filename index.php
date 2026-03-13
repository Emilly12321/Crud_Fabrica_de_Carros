<?php 

require_once('./Controller/carrosController.php');

$acao = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

$controlador = new carrosController();
$controlador->{$acao}();


?>