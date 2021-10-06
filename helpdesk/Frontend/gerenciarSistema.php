<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tipo Demanda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-color: #6A5ACD;
        }
        #dpc {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            width: 500px;
            height: 350px;
            margin-top: 120px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.616);
        }
        #form1 {
            width:400px;
        }
        input {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
        select {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
        option {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
    </style>
</head>
<body>
    <main class="row justify-content-center align-items-center">
    <div class="row justify-content-center align-items-center" id="dpc">
        <div id="d1">
        <p><a href="adicionarTipo.php">Adicionar Novo Tipo</a></p>
        <p><a href="adicionarCategoria.php">Adicionar Nova Categogoria</a></p>
        <p><a href="adicionarSubCat.php">Adicionar Nova Sub Categoria</a></p>
        <p><a href="adicionarItem.php">Adicionar Novo Item</a></p>
        <p><a href="adicionarTipoAtendimento.php">Adicionar Novo Tipo Atendimento</a></p>
        <p><a href="adicionarStatus.php">Adicionar Novo Status</a></p>
        <p><a href="gerenciarUsuarios.php">Gerenciar Usuários</a></p>
        <p><a href="gerenciarSistema.php">Gerenciar Sistema de Chamados</a></p>
    </div> <!--d1-->
    </div> <!--dpc-->
    </main>
</body>
</html>