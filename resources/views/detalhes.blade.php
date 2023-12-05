<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Controle de estoque</title>
</head>
<body>
    <div class="container">
        <h1>Detalhes do produto <?= $p->name ?></h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
            </tr>
        </table>
    </div>    
</body>
</html>