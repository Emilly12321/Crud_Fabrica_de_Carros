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

     function pegandoId($id)
    {
        $resultadoData = $this->modelo->getByID($id);
        require('../View/editarCarro.php');
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