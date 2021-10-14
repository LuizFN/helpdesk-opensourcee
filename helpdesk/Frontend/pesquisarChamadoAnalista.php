<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css">
    <link rel="stylesheet" href="CSS/pesquisarChamado.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="listaChamadoAnalista.php">Chamados</a>
        </li>
        <li class="nav-item active" id="sizefont">
        <a class="nav-link" href="pesquisarChamadoAnalista.php">Pesquisar Chamado</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="#">Gerar Relatório</a>
        </li>
        <li class="nav-item" id="btconfg">
            <button type="button" class="btn btn-primary">Configurações</button>
        </li>
        <li class="nav-item" id="btsair">
            <button type="button" class="btn btn-danger">Sair</button>
        </li>
    </ul>
    </nav>
    <?php include 'pesquisarChamado.php' ?>
</body>
</html>