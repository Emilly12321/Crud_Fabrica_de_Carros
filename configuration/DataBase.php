<?php 

define('HOST', 'localhost');
define('DBNAME', 'fabrica_carros');
define('USER', 'root');
define('PASSWORD', '');


class Conexao{

    protected $conexao;

    function __construct()
    {

        $this->conexaoBancoDados();

    }

    function conexaoBancoDados(){

        try
        {
            // PDO, permite definir uma interface segura de conexao ao banco de dados com PHP
            $this->conexao = new PDO('mysql:host='.HOST.'; dbname='.DBNAME , USER , PASSWORD);
            
        }
        
        catch(PDOException $e)
        {

            echo "ERROR".$e->getMessage();
            die();
        }

    }

}


?>
