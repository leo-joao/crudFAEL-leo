<!DOCTYPE html>
<?php
require 'menu.php';
require '../model/connection.php';
require '../model/get_product_list.php';

?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../controllers/js/product_actions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<link rel="stylesheet" href="../libs/css/styles-main.css">

<div class="list_main">
    <p class="register_label">Produtos Cadastrados</p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Produto</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Unidade de Medida</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo ListarProdutos($connection);
            ?>
        </tbody>
    </table>
</div>