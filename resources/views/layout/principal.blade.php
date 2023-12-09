<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Controle de estoque</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a href="/produtos" class="navbar-brand">
                Estoque
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/produtos">
                    Listagem
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/produtos/novo">
                    Adicionar novo
                </a>
            </li>
        </ul>
    </nav>   
    <div class="container">
        @yield('conteudo')
    </div>
    <footer class="footer">
        <p>Sistema de estoque de produtos com Laravel e PHP.</p>
    </footer>    
</body>
</html>