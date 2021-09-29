<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #6A5ACD;
        }
        #dlcad {
            margin-top: 20px;
            margin-left: 190px;
        }
        #lrs {
            margin-top: 95px;
        }
        #p1 {
            margin-top: 40px;
            text-align: center;
            font-weight: bolder;
            font-size: 25px;
            font-family: serif;
        }
        #logo {
            display: inline-block;
            height: 100px;
            width: 400px;
        }
        #dpc {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            width: 750px;
            height: 325px;
            margin-top: 200px;
            margin-left: 370px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.616);
        }
        input {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
    </style>
    <title>Login</title>
</head>
<body>
    
<div id="dpc">
    <div class="row">
        <div class="col">
            <img src="Midia/img/ptb.png" id="logo">
            <div id="p1"><p>Seja Bem-Vindo(a) ao Help Desk!</p></div>
            <div id="lrs"><a href="">Recuperar minha senha</a></div>
        </div>
    <div class="col">
        <form action="Backend/validar_login.php" method="POST">
        <h2>Entrar</h2>
            <div class="form-group">
                <label for="mat">Número Matricula:</label>
                <input type="text" class="form-control" placeholder="Matricula" name="mat" id="matr">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" placeholder="Senha" name="senha" id="pwd">
            </div>
            <button type="button" class="btn btn-success">Entrar</button><br>
            <div id="dlcad"><a href="Frontend/cadastro.php">Cadastra-se</a></div>
        </form>
    </div> <!--form1-->
    </div> <!--row-->
</div> <!--dpc-->
</body>
</html>