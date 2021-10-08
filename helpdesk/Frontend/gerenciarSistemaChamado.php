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
        #dpc {
            background-color: white;
            padding: 20px;
            width: 1400px;
            height: 500px;
            margin-top: 40px;
            margin-bottom: 200px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.616);
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
    </style>
</head>
<body>
    <div id="bemv"><p>Olá, nomeUsuario</p></div>
    <div class="row justify-content-center align-items-center">
        <div id="dpc">
            <div id="tipodemanda">
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
        <div id="dpc">
            <div id="status">
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
        <div id="dpc">
            <div id="tipoatendimento">
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