<?php 

require_once('../Models/Manipulacao/CarrosModel.php');
require_once('../Models/Entidade/Carro.php');


class carrosController{

    private $modelo;

    function __construct()
    {

        $this->modelo = new CarrosModel();

    }


    function inserir($modelo, $marca, $ano)
    { 

        $carro = new Carro($modelo, $marca, $ano);

        return $this->modelo->insert($carro);   
                   
            
    }
                


    function mostrandoTudo()
    {

        $resultadoData = $this->modelo->getAll();
        return $resultadoData;
    }

     function pegandoId($id)
    {

        return  $this->modelo->getByID($id);

    }

    function atualizar($id, $novoModelo, $novaMarca, $novoAno)
    {

        // Cria um objeto Carro atualizado
        $carroAtualizado = new Carro($novoModelo, $novaMarca, $novoAno,$id);
            
        return $this->modelo->update($carroAtualizado);

                    
    }

    function excluir($id){

        return $this->modelo->delete($id);
    }


}




?>