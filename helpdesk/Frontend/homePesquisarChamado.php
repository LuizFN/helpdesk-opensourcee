<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <a class="nav-link" href="homeUsuario.php">Meus Chamados</a>
        </li>
        <li class="nav-item active" id="sizefont">
        <a class="nav-link" href="homePesquisarChamado.php">Pesquisar Chamados</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="homeAbrirChamado.php">Abrir Chamado</a>
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