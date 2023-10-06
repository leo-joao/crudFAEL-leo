<!DOCTYPE html>
<?php
session_start();
?>

<html lang="pt-BR">

<script>
    <?php if (!isset($_SESSION['name'])) { ?>
        alert('Para visualizar esta página é necessário estar logado!');
        window.location.href = "login.php";
    <?php } ?>
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../libs/css/styles-menu.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../controllers/js/login.js"></script>

    <title>Bem Vindo <?php echo $_SESSION['name']; ?></title>
</head>

<body>
    <h1>Bem Vindo <?php echo $_SESSION['name']; ?></h1>
    <div class="sidebar">
        <ul>
            <li>
                <a href="register_estab.php">
                    <span class="icon"><ion-icon name="contacts"></ion-icon></span>
                    <span class="text">Cadastro de Estabelecimento</span>
                </a>
            </li>
            <li>
                <a href="register_prod.php">
                    <span class="icon"><ion-icon name="shirt"></ion-icon></span>
                    <span class="text">Cadastro de Produto</span>
                </a>
            </li>
            <li>
                <a href="register_price.php">
                    <span class="icon"><ion-icon name="logo-usd"></ion-icon></span>
                    <span class="text">Cadastro de Preços</span>
                </a>
            </li>
            <li>
                <a href="list_stores.php">
                    <span class="icon"><ion-icon name="business"></ion-icon></span>
                    <span class="text">Consulta de Estabelecimentos</span>
                </a>
            </li>
            <li>
                <a href="list_products.php">
                    <span class="icon"><ion-icon name="list-box"></ion-icon></span>
                    <span class="text">Consulta de Produtos</span>
                </a>
            </li>
            <li>
                <a href="list_prices.php">
                    <span class="icon"><ion-icon name="podium"></ion-icon></span>
                    <span class="text">Consulta de Preços</span>
                </a>
            </li>
        </ul>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

<script src="../libs/js/scripts.js"></script>

</html>