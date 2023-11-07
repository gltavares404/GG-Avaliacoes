<?php
    if(isset($_POST['submit'])) {
        include_once('config.php');

        $username = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $result = mysqli_query($conexao, "INSERT INTO usuarios(username, email, senha, adm) VALUES ('$username', '$email', '$senha',0)");
    
        header('Location: login.php');
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="stylecad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>

    <div class="main-login">

        <div class="left-login">
            <h1>Crie sua conta!<br><div class="colorir">Já possui uma conta? <a href="login.php">Clique aqui!</a></div></h1>
        </div>
        <form action="cad.php" method="POST">
        <div class="right-login">
            <div class="card-login">
                <h1>CADASTRO</h1>
                <div class="textfield">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Digite seu usuário">
                </div>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Digite seu e-mail">
                </div>
                <div class="textfield">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Digite sua senha">
                </div>
                <input type="submit" name="submit" id="submit" class="btn-login">
            </div>
        </div>
        </form>
    </div>
</body>
</html>