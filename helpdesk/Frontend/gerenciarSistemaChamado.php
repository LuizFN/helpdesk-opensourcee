<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Chamado Usuário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(114, 216, 207);
        }
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
        #dpc1 {
            background-color: white;
            padding: 20px;
            width: 1400px;
            height: 500px;
            margin-top: 40px;
            border-top-style: solid;
            border-left-style: solid;
            border-right-style: solid;
        }
        #dpc2 {
            background-color: white;
            padding: 20px;
            width: 1400px;
            height: 500px;
            border-left-style: solid;
            border-right-style: solid;
        }
        #dpc3 {
            background-color: white;
            padding: 20px;
            width: 1400px;
            height: 500px;
            margin-bottom: 200px;
            border-left-style: solid;
            border-right-style: solid;
            border-bottom-style: solid;
        }
        #tipodemanda {
            height: 400px;
            overflow: auto;
        }
        #status {
            height: 400px;
            overflow: auto;
        }
        #tipoatendimento {
            height: 400px;
            overflow: auto;
        }
        #bemv {
            margin-top: 40px;
            text-align: center;
            font-weight: bolder;
            font-size: 25px;
            font-family: serif;
        }
        #titulo {
            text-align: center;
            border-style: solid;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active" id="sizefont">
        <a class="nav-link" href="gerenciarSistemaChamado.php">Gerenciar Sistema de Chamados</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="gerenciarUsuarios.php">Gerenciar Usuários</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="gerenciarSistema">Gerenciar cadastro Demandas</a>
        </li>
        <li class="nav-item" id="btconfg">
            <button type="button" class="btn btn-primary">Configurações</button>
        </li>
        <li class="nav-item" id="btsair">
            <button type="button" class="btn btn-danger">Sair</button>
        </li>
    </ul>
    </nav>
    <div id="bemv"><p>Olá, nomeUsuario</p></div>
    <div class="row justify-content-center align-items-center">
        <div id="dpc1">
            <div id="tipodemanda">
                <div id="titulo"><h2>Gerenciar Abertura de Chamados</h2></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Categoria</th>
                            <th>SubCategoria</th>
                            <th>Item</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!--tipodemanda-->
        </div> <!--dpc-->
        <div class="row justify-content-center align-items-center">
        <div id="dpc2">
            <div id="status">
                <div id="titulo"><h2>Gerenciar Status</h2></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!--status-->
        </div> <!--dpc-->
        <div class="row justify-content-center align-items-center">
        <div id="dpc3">
            <div id="tipoatendimento">
                <div id="titulo"><h2>Gerenciar Tipo Atendimento</h2></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Tipo Atendimento</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!--tipoatendimento-->
        </div> <!--dpc-->
    </div> 
</body>
</html>