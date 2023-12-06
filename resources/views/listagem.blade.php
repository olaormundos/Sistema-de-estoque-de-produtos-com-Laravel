<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Listagem de produtos</title>
</head>
<body>
    <div class="container">
        <h1>Listagem de produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <?php foreach ($produtos as $item): ?>
            <tr>
                <td><?= $item->name ?></td>
                <td><?= $item->valor ?></td>
                <td><?= $item->descricao ?></td>
                <td><?= $item->quantidade ?></td>
                <td>
                    <a href="/produtos/detalhes/<?= $item->id ?>">
                        <span>
                            <i class="bi bi-search-heart"></i>
                        </span>
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>    
</body>
</html>