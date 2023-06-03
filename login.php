<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <title>Login</title>
</head>

<body>

    <div class="main-login">

        <div class="left-login">

            <h1>Faça login<br><a href="index.php">Voltar</a></h1>

            <img src="bjj.svg" class="left-login-image" alt="bjj animação">

        </div>

        <div class="right-login">

            <div class="card-login">

                <h1>LOGIN</h1>

                <form action="testlogin.php" method="POST">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário"></imput>
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="usuario" placeholder="Usuário"></imput>
                    </div>

                    <button class="btn-login">Login</button>
                </form>

            </div>

        </div>

    </div>

</body>


</html>