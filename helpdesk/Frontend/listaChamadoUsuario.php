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
        #dpc {
            background-color: white;
            padding: 20px;
            width: 1400px;
            height: 500px;
            margin-top: 40px;
            margin-bottom: 200px;
            border-style: solid;
        }
        #filanalista {
            height: 400px;
            overflow: auto;
        }
        #filageral {
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active" id="sizefont">
        <a class="nav-link" href="listaChamadoUsuario.php">Meus Chamados</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="abrirChamado.php">Abrir Chamado</a>
        </li>
        <li class="nav-item" id="sizefont">
        <a class="nav-link" href="pesquisarChamadoUsuario.php">Pesquisar Chamados</a>
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
    <main class="row justify-content-center align-items-center">
        <div id="dpc">
            <div id="filanalista">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Chamado</th>
                            <th>Analista Respossável</th>
                            <th>Tipo>Categoria>SubCategoria>Item</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Data Inicio</th>
                            <th>Data Fim</th>
                             <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Tipo>Categoria>SubCategoria>Item</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Tipo>Categoria>SubCategoria>Item</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td>Exemplo</td>
                            <td><a href="verChamadoUsuario.php">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!--filanalista-->
        </div> <!--dpc-->

    </main> 
</body>
</html>