<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Menu-Fabrica de Veiculos</title>
</head>

<body>



<?php

    require_once '../Models/Entidade/Carro.php';
    require_once '../Models/Manipulacao/CarrosModel.php';
    require_once 'carrosController.php';

    $db = new carrosController();

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        
        $acao = $_POST['acao'] ?? "";


        switch($acao){

            case 'fabricar':
                include '../View/cadastro_carro.php';
                break;

            case "listar":

             $db->mostrandoTudo();

            break;


            case "salvarCarro":

                $modelo = $_POST['modelo'];
                $marca = $_POST['marca'];
                $ano = $_POST['ano'];

                $db->inserir($modelo, $marca, $ano);

                 echo '
                        <div class="container-pai">
                            <div class="container-esquerdo">
                                <div class="fotos-integrantes">
                                    <img src="../assets/img/emilly.png" class="fotos-inte">
                                    <img src="../assets/img/nivea.jpg" class="fotos-inte">
                                </div>
                                <div class="titulos">
                                    <h2 class="subtitulo-principal">monte o seu veículo</h2>
                                    <h1 class="texto-h1">Fábrica de Veículos</h1>
                                </div>
                                <div class="caixa-card">
                                    <h3 class="sucesso">Sucesso na Fabricação</h3>
                                    <div class="caixa-btn">
                                        <a href="../View/index.html" class="btn-segundo">Voltar ao menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-direito"></div>
                    </div>';

            break;

            case "atualizarCarro":

                
                $id = $_POST['id'];
                $modelo = $_POST['modelo'];
                $marca = $_POST['marca'];
                $ano = $_POST['ano'];

                $carro = new Carro($modelo, $marca, $ano, $id);

                $db->atualizar($carro);

                echo '
                        <div class="container-pai">
                            <div class="container-esquerdo">
                                <div class="fotos-integrantes">
                                    <img src="../assets/img/emilly.png" class="fotos-inte">
                                    <img src="../assets/img/nivea.jpg" class="fotos-inte">
                                </div>
                                <div class="titulos">
                                    <h2 class="subtitulo-principal">monte o seu veículo</h2>
                                    <h1 class="texto-h1">Fábrica de Veículos</h1>
                                </div>
                                <div class="caixa-card">
                                    <h3 class="sucesso">Sucesso na Fabricação</h3>
                                    <div class="caixa-btn">
                                        <a href="../View/index.html" class="btn-segundo">Voltar ao menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-direito"></div>
                    </div>';

                break;

            case 'vender':
                include 'views/formVenda.php';
                break;

        }
    }
    elseif ($_SERVER['REQUEST_METHOD'] === "GET") {

        $acao = $_GET['acao'] ?? "";

        switch($acao){

            case "listar":

                $db->mostrandoTudo();

            break;

            case "editar":

                $id = $_GET['id'];

                $resultadoData = $db->pegandoId($id);

                require_once('../View/editarCarro.php');

            break;

    }
    }
?>

</body>

</html>