<!DOCTYPE html>
<?php
require 'menu.php';
require '../model/connection.php';
require '../model/get_products_select.php';
require '../model/get_shops_select.php';

?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../controllers/js/save_price.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<link rel="stylesheet" href="../libs/css/styles-main.css">

<div class="register_main">
    <p class="register_label">Produto</p>
    <?php
    echo GerarSelectProdutos($connection);
    ?>
    <p class="register_label">Estabelecimento</p>
    <?php
    echo GerarSelectLojas($connection);
    ?>
    <p class="register_label">Preço</p>
    <input type="text" id="prod_price" class="register_field" name="prod_price" placeholder="0000,00">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="warning" id="info_msg" name="info_msg" style="display: none; color: green; font-size: 20px;">Salvo com Sucesso!</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <button id="save_btn" class="save_btn">
        Salvar
    </button>
    <button id="cancel_btn" class="cancel_btn">
        Cancelar
    </button>
</div>