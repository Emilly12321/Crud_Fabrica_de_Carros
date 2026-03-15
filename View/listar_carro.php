<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <table>
                            
                            <thead>
                                <tr>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Ano</th>
                                    <th>Acao</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($resultadoData as $dados): ?>
                                    
                                    <tr>
                                        
                                        <td> <?= $dados['modelo'] ?></td>
                                        <td> <?= $dados['marca'] ?></td>
                                        <td> <?= $dados['ano'] ?></td>
                                        <td><a href="../Controller/processa.php?acao=editar&id=<?= $dados['id'] ?>">Editar</a></td>
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

</body>

</html>