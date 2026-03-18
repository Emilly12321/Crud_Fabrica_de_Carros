<?php 

class Carro{
    
    protected $id;
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

        if($this->modelo != null){

            
            return $this->modelo;
            
        }else{
            return null;
        }
        
    }


    public function getMarca(){

        return $this->marca;
            
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