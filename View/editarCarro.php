<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Editar Carro</title>
</head>

<body>

<div class="container-pai">
    <div class="container-esquerdo">

        <div class="fotos-integrantes">
            <img src="../assets/img/emilly.png" alt="Emilly luz" class="fotos-inte">
            <img src="../assets/img/nivea.jpg" alt="Nivea souza" class="fotos-inte">
            <img src="../assets/img/ana.png" alt="Ana" class="fotos-inte">
        </div>

        <div class="titulos">
            <h2 class="subtitulo-principal">Fabrica de Carro</h2>
            <h1 class="texto-h1">Edite o Carro</h1>
        </div>

        <div class="caixa-card">
            <h3>Dados do veículo</h3>

            <form action="../Controller/processa.php" method="POST" class="form-menu">

                <input type="hidden" name="acao" value="atualizarCarro">
                <input type="hidden" name="id" value="<?= $resultadoData['id'] ?>">


                    <div class="bloco-veiculo">
                        <label>Marca :</label>
                        <input type="text" name="marca" value="<?= $resultadoData['marca'] ?>" id = "marca" required>

                        <label>Modelo :</label>
                        <input type="text" name="modelo" id = "modelo" value="<?= $resultadoData['modelo'] ?>" required>

                        <label>Ano :</label>
                        <input type="text" name="ano" id = "ano" value="<?= $resultadoData['ano'] ?>" required>

                    </div>

                <div class="caixa-btn">
                    <button type="submit" class="btn-primeiro">Confirmar</button>
                    <a href="..\View\listar_carro.php" class="btn-segundo">Voltar a listagem</a>
                </div>

            </form>
        </div>

    </div>

    <div class="container-direito"></div>
</div>

</body>
</html>