
<?php

    require_once '../Models/Entidade/Carro.php';
    require_once '../Models/Manipulacao/CarrosModel.php';
    require_once 'carrosController.php';

    $db = new carrosController();


    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        
        $acao = $_POST['acao'] ?? "";


        switch($acao){

            case "salvarCarro":

                $modelo = $_POST['modelo'];
                $marca = $_POST['marca'];
                $ano = $_POST['ano'];

                $db->inserir($modelo, $marca, $ano);
                
                header("Location: ..\View\index.html");
                exit;

            break;

            case "atualizarCarro":

                
                $id = $_POST['id'];
                $modelo = $_POST['modelo'];
                $marca = $_POST['marca'];
                $ano = $_POST['ano'];

                $db->atualizar($id,$modelo, $marca, $ano);
                
                header("Location: processa.php?acao=listar");
                exit;

            break;


        }
    }
    else if ($_SERVER['REQUEST_METHOD'] === "GET") {

            $acao = $_GET['acao'] ?? "";

            switch($acao){

                case "listar":

                    $resultadoData = $db->mostrandoTudo();
                    include_once('../View/listar_carro.php');
                    exit;

                break;

                case "editar":

                    $id = $_GET['id'];

                    $resultadoData = $db->pegandoId($id);
                    include_once('../View/editarCarro.php');
                    exit;


                break;

                case "excluir":

                    $id = $_GET['id'];

                    $db->excluir($id);

                    header("Location: processa.php?acao=listar");
                    exit;

                break;

        }
    }
?>
