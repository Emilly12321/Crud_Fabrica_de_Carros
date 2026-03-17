<?php 
 
require_once('../configuration/DataBase.php');

class CarrosModel extends Conexao
{
    private $tabela;


    function __construct()
    {
        // invocando o mesmo construtor que a classe pai tem (DataBase.php)
        parent::__construct();
        $this->tabela = 'carros';
    }

    public function insert(Carro $carro){

        // mesma coisa se fosse -> $bancoSelecionado = $this->conexao->prepare("INSERT INTO $this->tabela (modelo, marca, ano) VALUES (?, ?, ?)")
        $sql = "INSERT INTO $this->tabela (modelo, marca, ano) VALUES (?, ?, ?)";

        $inserindo = $this->conexao->prepare($sql);

        return $inserindo->execute([
            $carro->getModelo(),
            $carro->getMarca(),
            $carro->getAno()
        ]);
    }

    public function getAll()
    {

        // aqui ele manda a execução ao banco e aguarda o uso para ser executado
        $bancoSelecionando = $this->conexao->query("SELECT * FROM $this->tabela");

        // transformando o objeto em uma array associativa (array de arrays). Trazendo todos os registros da consulta
        $resultadoQuery = $bancoSelecionando->fetchAll(PDO::FETCH_ASSOC);;

        return $resultadoQuery;
    }

    public function getByID($id){

        $resultado = $this->conexao->prepare("SELECT * FROM $this->tabela WHERE id = ?");

        $resultado->execute([$id]);

        ///Retorna apenas um unico array associativo
        return $resultado->fetch(PDO::FETCH_ASSOC);;
    }

    public function update(Carro $carro)
    {
        $resultado = $this->conexao->prepare("UPDATE $this->tabela SET modelo = ?, marca = ?, ano = ? WHERE id = ?");

        return $resultado->execute([
            $carro->getModelo(),
            $carro->getMarca(),
            $carro->getAno(),
            $carro->getId()
        ]);
    }    

    public function delete($id){

        $resultado = $this->conexao->prepare("DELETE FROM $this->tabela WHERE id = ?");

        return $resultado->execute([$id]);

    }
}


?>
