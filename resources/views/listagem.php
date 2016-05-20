<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/css/app.css">
    <meta charset="UTF-8">
    <title>Listagem de produtos</title>
</head>
<body>

    <table class="table">
        <?php foreach ($produtos as $produto):?>
        <tr>
            <td><?=$produto->id?></td>
            <td><?=$produto->nome?></td>
            <td><?=$produto->valor?></td>
            <td><?=$produto->descricao?></td>
            <td><?=$produto->quantidade?></td>
        </tr>
        <?php endforeach;?>
    </table>

</body>
</html>