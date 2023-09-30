<!DOCTYPE html>
<?php
require 'menu.php';

?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../controllers/js/save_product.js"></script>

<link rel="stylesheet" href="../libs/css/styles-main.css">

<div class="register_main">
    <p class="register_label">Nome do Produto</p>
    <input type="text" id="prod_name" class="register_field" name="prod_name">
    <p class="register_label">Marca</p>
    <input type="text" id="prod_brand" class="register_field" name="prod_brand">
    <p class="register_label">Quantidade / Tamanho</p>
    <input type="number" min="1" max="999" id="prod_amount" class="register_field" name="prod_amount">
    <p class="register_label">Unidade de Medida</p>
    <input type="text" id="prod_unit" class="register_field" name="prod_unit">
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