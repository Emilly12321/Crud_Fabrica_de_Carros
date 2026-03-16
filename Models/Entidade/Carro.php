<?php 

class Carro{
    
    protected $id;
    public $modelo;
    public $marca;
    public $ano;

    //efetuando a construcao do carro ja com seus atributos
    
    public function __construct($modelo, $marca, $ano, $id = null){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
        $this->id = $id;
    }

    public function setModelo($modelo){

        $this->modelo = $modelo;

    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setMarca($marca){

        $this->marca = $marca;

    }

    public function getMarca(){
        return $this->marca;
    }


    public function setAno($ano){

        $this->ano = $ano;

    }

    public function getAno(){
        return $this->ano;
    }

    public function setID($id){

        $this->id = $id;
        
    }

    public function getId(){
        return $this->id;
    }

}



?>