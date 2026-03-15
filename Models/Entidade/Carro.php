<?php 

class Carro{
    private $id;
    private $modelo;
    private $marca;
    private $ano;

    //efetuando a construcao do carro ja com seus atributos
    
    public function __construct($modelo, $marca, $ano, $id = null){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
        $this->id = $id;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getAno(){
        return $this->ano;
    }

    public function getId(){
        return $this->id;
    }

}



?>