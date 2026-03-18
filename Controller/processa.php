
<?php
    session_start();


    require_once 'carrosController.php';

    $db = new carrosController();


    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        
        $acao = $_POST['acao'] ?? "";


        switch($acao){

            case "salvarCarro":

                $resultado = false;

                $modelo = $_POST['modelo'] ?? null;
                $marca = $_POST['marca'] ?? null;
                $ano = $_POST['ano'] ?? null;

                if($modelo != null || $marca != null || $ano != null){

                    $db->inserir($modelo, $marca, $ano);
                    $resultado = true;

                }

                    
                if($resultado == true){ 

                    $_SESSION['msg'] = ['texto' => 'Carro Criado com sucesso!!'];

                }else{
                    $_SESSION['msg'] = ['texto' => 'Não foi possivel fabricar o Carro!!'];
                }
                

                header("Location: ..\index.php");
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
