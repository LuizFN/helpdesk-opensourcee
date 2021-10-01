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
            width: 700px;
            height: 350px;
            margin-top: 120px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.616);
        }
        #form1 {
            width:450px;
        }
        input {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
    </style>
</head>
<body>
    <main class="row justify-content-center align-items-center">
    <div class="row justify-content-center align-items-center" id="dpc">
        <div id="form1">
        <form action="Backend/validar_login.php" method="POST">
        <h2>Cadastrar Novo Tipo</h2>
    <div class="row">
        <div class="col">

        </div> <!--col1-->
        <div class="col">

        </div> <!--col2-->
        </div> <!--row 1-->
        <div class="row">
            <div class="col">

            </div> <!--col3-->
            <div class="col">

            </div> <!--col4-->
        </div> <!--row 2-->
            <button type="button" class="btn btn-success">Enviar</button>
        </form>
    </div> <!--form1-->
    </div> <!--dpc-->
    </main>
</body>
</html>