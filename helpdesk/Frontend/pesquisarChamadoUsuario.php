<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        #btsair {
            margin-left: 5px;
        }
        #btconfg {
            margin-left: 700px;
        }
        #sizefont {
            font-size: 15px;
            width: 200px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="listaChamadoUsuario.php">Meus Chamados</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="abrirChamado.php">Abrir Chamado</a>
        </li>
        <li class="nav-item active" id="sizefont">
        <a class="nav-link" href="pesquisarChamado.php">Pesquisar Chamados</a>
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