<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>home</title>
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
        #dpc {
            background-color: white;
            padding: 20px;
            width: 1400px;
            height: 500px;
            margin-top: 40px;
            margin-bottom: 200px;
            border-style: solid;
        }
        #listaUsuarios {
            height: 400px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="gerenciarSistemaChamado.php">Gerenciar Sistema de Chamados</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link active" href="gerenciarUsuarios.php">Gerenciar Usuários</a>
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
    <main class="row justify-content-center align-items-center">
        <div id="dpc">
            <div id="listaUsuarios">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nome Usuário</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Departamento</th>
                            <th>Nivel de Acesso</th>
                            <th>Status no Sistema</th>
                             <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo@exemplo.com</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verUsuario.php">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo@exemplo.com</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verUsuario.php">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!--listaUsuarios-->
        </div> <!--dpc-->

    </main> 
</body>
</html>