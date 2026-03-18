<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .btn-primary a{
            --bs-btn-border-color: #0d6efd;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #0b5ed7;
            --bs-btn-hover-border-color: #0a58ca;
        }
    </style>

    <title>Fabrica de Veiculos</title>

</head>

<body>

        
    <div class="container-pai">

       
        <div class="container-esquerdo-menu">
            <div class="fotos-integrantes">
                <img src="assets/img/emilly.png" alt="Emmilly luz" class="fotos-inte">
                <img src="assets/img/nivea.jpg" alt="Nivea souza" class="fotos-inte">
            </div>
            <div class="titulos">
                <h2 class="subtitulo-principal">monte o seu veículo</h2>
                <h1 class="texto-h1">Fábrica de Veículos</h1>

            </div>

            <?php if (isset($_SESSION['msg'])): ?>
               
                <div class="alert alert-info  alert-dismissible fade show d-flex  " role="alert">
                    
                    <?= "<p>". $_SESSION['msg']['texto']."</p>" ?>

                    <button type="button" class="btn btn-close " data-bs-dismiss="alert">
                    </button>

                </div>

                <?php unset($_SESSION['msg']); ?>

             <?php endif; ?>

             

            <div class="caixa-card">
                <h3>Menu Principal</h3>


               
                <div class="container-menu">

                       
                        <div class="caixa-btn">

                            <a type="submit" name="acao" href="View\cadastro_carro.php"
                                class="btn btn-primary p-2 fs-5 w-100" role="button">Fabricar Veículo</a>

                            <a type="submit" name="acao" href="Controller\processa.php?acao=listar"
                                class="btn btn-primary p-2 fs-5 w-100" role="button">Estoque</a>
                        </div>

                </div>
            </div>
            <p class="pequenas-palavras">Este programa faz parte da atividade final da disciplina de <span
                    class="label-strong">Programação Orientada a Objetos em PHP</span>.
                Ele apresenta uma simulação dinâmica de uma fábrica de veículos, permitindo criar, gerenciar e vender
                diferentes tipos de veículos</p>
        </div>

        <div class="container-direito">
        </div>
        
         
            

    </div>

     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>