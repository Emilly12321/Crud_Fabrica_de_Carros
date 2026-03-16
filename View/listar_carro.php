<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <title>Carros Cadastrados</title>

    
</head>

<body>
    <div class="container-pai">

          
        <div class="container-esquerdo">
 
        
            <div class="fotos-integrantes">
                <img src="../assets/img/emilly.png" alt="Emmilly luz" class="fotos-inte">
                <img src="../assets/img/nivea.jpg" alt="Nivea souza" class="fotos-inte">
            </div>
            
            <div class="titulos">
                <h2 class="subtitulo-principal">Fábrica de Veículos</h2>
                <h1 class="texto-h1">Veículos em Estoque</h1>
                
            </div>
        
            <div class="caixa-card ">
                <h3>Listagem dos Carros</h3>

                <div class='mostrar-veiculo'>                    
                        <table class="table table-striped ">
                            
                            <thead>
                                <tr class="text-center">
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Ano</th>
                                    <th>Acao</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($resultadoData as $dados): ?>
                                    
                                    <tr class="text-center">
                                        
                                        <td> <?= $dados['modelo'] ?></td>
                                        <td> <?= $dados['marca'] ?></td>
                                        <td> <?= $dados['ano'] ?></td>

                                             <td>
                                                <div >

                                                    <a href="../Controller/processa.php?acao=editar&id=<?= $dados['id'] ?>" class="btn bi bi-pen bg-warning text-light"></a>
                                                    
                                                    <a href="../Controller/processa.php?acao=excluir&id=<?= $dados['id'] ?>" class="btn bi bi-trash bg-danger text-light "></a>
                                                </div>
                                            </td>
                                        </tr>
                                    
                                    <?php endforeach ;?>
                                </tbody>
                                
                            </table>
                    </div>
                    <div class="caixa-btn">
                    <a href="../View/index.html" class="btn-segundo">Voltar ao Menu</a>
                    </div>
                
             </div>
            </div>

        <div class="container-direito"></div>
                
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>