<?php 

require_once('../Models/Manipulacao/CarrosModel.php');


class carrosController{

    private $modelo;

    function __construct()
    {

        $this->modelo = new CarrosModel();

    }


    function inserir($modelo, $marca, $ano)
    {
        $carro = new Carro($modelo, $marca, $ano);

        $this->modelo->insert($carro);

        
    }

    function mostrandoTudo()
    {

        $resultadoData = $this->modelo->getAll();
        require_once('../View/listar_carro.php');

    }

    function pegandoId($id){

        return $this->modelo->getByID($id);

    }

    function atualizar(Carro $carro){

        return $this-> modelo ->update($carro);

    }



}




?>