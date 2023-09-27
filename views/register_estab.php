<!DOCTYPE html>
<?php
require 'menu.php';

?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../controllers/js/save_estab.js"></script>

<link rel="stylesheet" href="../libs/css/styles-main.css">

<div class="register_main">
    <p class="register_label">Nome do Estabelecimento</p>
    <input type="text" id="estab_name" class="register_field" name="estab_name">
    <p class="register_label">Endereço</p>
    <input type="text" id="estab_address" class="register_field" name="estab_name">
    <p class="register_label">Cidade</p>
    <input type="text" id="estab_city" class="register_field" name="estab_name">
    <p class="register_label">Número de Filiais</p>
    <input type="number" min="1" max="999" id="estab_amount" class="register_field" name="estab_name" value="1">
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