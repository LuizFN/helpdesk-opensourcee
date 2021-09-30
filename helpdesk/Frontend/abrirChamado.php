<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir Chamado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-color: #6A5ACD;
        }
        #dpc {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            width: 700px;
            height: 560px;
            margin-top: 180px;
            margin-left: 425px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.616);
        }

        select {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
        option {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
        textarea {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
    </style>
</head>
<body>
    <div class="row justify-content-center align-items-center" id="dpc">
        <form action="Backend/validar_login.php" method="POST">
        <h2>Abrir Novo Chamado</h2>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tipodemanda">Selrcione o Tipo de Demanda</label>
                <select class="form-control" id="tipod" name="tipo">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
        </div> <!--col1-->
        <div class="col">
            <div class="form-group">
                <label for="repsenha">Selecione a Categoria:</label>
                <select class="form-control" id="catg" name="cat">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
        </div> <!--col2-->
        </div> <!--row 1-->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="repsenha">Selecione a SubCategoria:</label>
                    <select class="form-control" id="scatg" name="scat">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div> <!--col3-->
            <div class="col">
                <div class="form-group">
                    <label for="repsenha">Selecione o item:</label>
                    <select class="form-control" id="items" name="item">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div> <!--col4-->
        </div> <!--row 2-->
            <div class="form-group">
                <label for="descricao">Faça uma breve descrição da sua solicitação:</label>
                <textarea class="form-control" rows="5" id="descr" name="descricao"></textarea>
            </div>
            <button type="button" class="btn btn-success">Enviar</button>
        </form>
    </div> <!--dpc-->
</body>
</html>