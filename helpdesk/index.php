<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Frontend/Bootstrap/bootstrap.css">
    <link rel="stylesheet" href="Frontend/CSS/login.css">
    <title>Login</title>
</head>
<body>
    
<div id="dpc">
    <div class="row">
        <div class="col">
            <img src="Midia/img/ptb.png" id="logo">
            <div id="p1"><p>Seja Bem-Vindo(a) ao Help Desk!</p></div>
            <div id="lrs"><a href="Frontend/recuperarSenha.php">Recuperar minha senha</a></div>
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