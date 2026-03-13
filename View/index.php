

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Carros</title>
</head>
<body>
    <h1>Listando Carros</h1>

    <div>

    <table class="table">
        <thead>
            <tr>

                <th>ID</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Ano</th>
                <th>Cor</th>
                <th>Preço</th>
            
            </tr>
        </thead>
        <tbody>
            <?php  foreach($resultadoData as $dado): ?>
                <tr>
                    <td><?= $dado['id'] ?></td>
                    <td><?= $dado['nome_modelo	'] ?></td>
                    <td><?= $dado['marca'] ?></td>
                    <td><?= $dado['ano'] ?></td>
                    <td><?= $dado['cor'] ?></td>
                    <td><?= $dado['preco'] ?></td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>



    </div>

</body>
</html>