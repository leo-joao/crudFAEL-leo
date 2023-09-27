<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../libs/css/styles.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../controllers/js/login.js"></script>

    <title>Tela de Login</title>
</head>

<body>
    <div class="main">
        <h2 class="neon">Login</h2>
        <div class="login-container">
            <form name="loginForm" autocomplete="off" id="loginForm" method="POST" action="#">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btnlogin">Entrar</button>
            </form>
        </div>
    </div>
    <script src="../libs/js/scripts.js"></script>
</body>

</html>