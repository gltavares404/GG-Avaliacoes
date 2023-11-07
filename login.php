<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teste.css">
    <title>Login</title>
</head>
<body>
    <form action="testLogin.php" method="POST">
        <div class="cad">
            <img src="/elementos/logo.webp" class="logo">
                <h1 class="nometab">Realize seu login!</h1>
                <h3 class="desc">Coloque suas informações pessoais nos campos abaixo</h3>
                    <div class="icon">
                        <img src="/elementos/mail_FILL0_wght400_GRAD0_opsz24.svg">
                            <input type="text" name="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="icon">
                        <img src="/elementos/lock_FILL0_wght400_GRAD0_opsz24.svg">
                            <input type="password" name="password" placeholder="Digite sua senha">
                    </div>
                            <button class="cadastrar" type="submit">Entrar</button>
        </div>
    </form>
</body>
</html>