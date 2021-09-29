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
        #dp {
            background-color: white;
            border-radius: 15px;
            padding: 15px;
            width: 650px;
            height: 620px;
            margin: auto;
            margin-bottom: 200px;
            margin-top: 150px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.616);
        }
        #df1 {
            display: inline-block;
        }
        input {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.250);
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="row justify-content-center align-items-center" id="dp">
        <form action="Backend/validar_login.php" method="POST">
        <h2>Cadastro</h2>
        <div id="df1">
            <div class="form-group">
                <label for="mat">Número Matricula:</label>
                <input type="text" class="form-control" placeholder="Matricula" name="mat" id="matr" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="email">Endereço de E-mail:</label>
                <input type="text" class="form-control" placeholder="Seu E-mail:" name="email" id="e-mail" required>
            </div>
        </div>
        <div id="df1">
        <div class="form-group">
                <label for="nome">Nome Completo::</label>
                <input type="text" class="form-control" placeholder="Seu Nome:" name="nome" id="nme" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" placeholder="Seu Telefone:" name="telefone" id="fone" required>
            </div>
        </div>
            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" class="form-control" placeholder="Seu Departamento:" name="departamento" id="dept" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" placeholder="Digite su senha:" name="senha" id="pass" required>
            </div>
            <div class="form-group">
                <label for="confsenha">Confirmar Senha:</label>
                <input type="text" class="form-control" placeholder="Confirme sua senha:" name="csenha" id="cpass" required>
            </div>
            <button type="button" class="btn btn-success">Finalizar Cadastro</button><br>
        </form>
    </div>
</body>
</html>