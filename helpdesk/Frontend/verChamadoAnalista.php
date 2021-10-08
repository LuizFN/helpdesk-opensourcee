<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Chamado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(114, 216, 207);
        }
        #dpc {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            width: 1300px;
            height: 650px;
            margin-top: 120px;
            margin-bottom: 200px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.616);
        }
        #bt {
            margin-top: 260px;
        }
    </style>
</head>
<body>
    <main class="row justify-content-center align-items-center">
        <div id="dpc">
            <div class="row">
                <div class="col">
                    <div id="numchamado">
                        Aqui Ficara o Número do Chamado
                    </div><br>
                    <div id= "infodemanda">
                        <div class="row">
                        <p>Tipo</p>>
                        <p>Categoria</p>>
                        <p>SubCategoria</p>>
                        <p>Item</p>
                        </div> <!--row-->
                    </div>
                    <div id="usuario">
                        Aqui ficara as informações do Usuário
                    </div><br><br><br><br>
                    <div id="descricao">
                        Aqui ficara a descrição do Usuário
                    </div>
                </div> <!--col-->
                <div class="col">
                    <p>Data e Hora abertura</p>
                    <p>Data prazo</p>
                    <p>Alterar Prioridade</p>
                    <p>Selecionar Tipo Atendimento</p>
                    <p>Selecionar Status</p><br><br><br>
                    <div>Descrição Analista</div>
                </div>
            </div> <!--row-->
            <div id="bt"><button type="button" class="btn btn-success">Salvar Alterações</button></div>
        </div> <!--dpc-->
    </main>
</body>
</html>