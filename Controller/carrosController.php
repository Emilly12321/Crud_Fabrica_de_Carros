<?php 

require_once('./Models/CarrosModel.php');


class carrosController{

    private $modelo;

    function __contruct()
    {

        $this->modelo = new CarrosModel();

    }

    function getAll()
    {

        $resultadoData = $this->modelo->getAll();
        print_r($resultadoData);

    }



}




?>