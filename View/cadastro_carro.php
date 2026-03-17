<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Cadastrar Carros</title>
</head>

<body>

<div class="container-pai">
    <div class="container-esquerdo">

        <div class="fotos-integrantes">
            <img src="../assets/img/emilly.png" alt="Emilly luz" class="fotos-inte">
            <img src="../assets/img/nivea.jpg" alt="Nivea souza" class="fotos-inte">
        </div>

        <div class="titulos">
            <h2 class="subtitulo-principal">monte o seu veículo</h2>
            <h1 class="texto-h1">Fabricando</h1>
        </div>

        <div class="caixa-card">
            <h3>Informe os dados dos veículos</h3>

            <form action="../Controller/processa.php" method="POST" class="form-menu">

                <input type="hidden" name="acao" value="salvarCarro">



                    <div class="bloco-veiculo">
                        <label>Marca :</label>
                        <input type="text" name="marca" id = "marca" >

                        <label>Modelo :</label>
                        <input type="text" name="modelo" id = "modelo" >

                        <label>Ano :</label>
                        <input type="text" name="ano" id = "ano" >

                    </div>

                <div class="caixa-btn">
                    <button type="submit" class="btn-primeiro">Confirmar</button>
                    <a href="..\index.php" class="btn-segundo">Voltar ao menu</a>
                </div>

            </form>
        </div>

    </div>

    <div class="container-direito"></div>
</div>


</body>
</html>