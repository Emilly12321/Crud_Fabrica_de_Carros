<?php 

require_once('./configuration/DataBase.php');

class CarrosModel extends Conexao
{
    private $tabela;


    function __construct()
    {
        // invocando o mesmo construtor que a classe pai tem (DataBase.php)
        parent::__construct();
        $this->tabela = 'carros';
    }

    function getAll()
    {

        $bancoSelecionando = $this->conexao->query("SELECT * FROM $this->tabela");

        // transformando o objeto em uma array associativa.
        $resultadoQuery = $bancoSelecionando->fetchAll();

        return $resultadoQuery;
    }


}


?>
