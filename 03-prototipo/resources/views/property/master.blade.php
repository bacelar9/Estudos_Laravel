<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev:: Crud Imobi</title></title>

    <link rel="stylesheet" href="<?= asset('css/app.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="<?= url('/imoveis/'); ?>" class="navbar-brand">Lara<b>Dev</b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= url('/imoveis/'); ?>" class="nav-link">Listar todos os Imóveis</a> </li>
                <li class="nav-item"><a href="<?= url('/imoveis/novo'); ?>" class="nav-link">Cadastrar Novo Imóvel</a></li>
            </ul>
        </div>
    </nav>
@yield('content')

<script src="<?= asset('js/app.js'); ?>"></script>
<script src="<?= asset('js/script.js'); ?>"></script>
</body>
</html>
