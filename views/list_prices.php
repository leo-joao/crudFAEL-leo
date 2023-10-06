<!DOCTYPE html>
<?php
require 'menu.php';
require '../model/connection.php';
require '../model/get_shops_select.php';


?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../controllers/js/prices_list.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<link rel="stylesheet" href="../libs/css/styles-main.css">

<div class="list_main">
    <p class="register_label">Estabelecimento</p>
    <?php
    echo GerarSelectLojas($connection, true);
    ?>
    <br>
    <br>
    <div id="tabela_precos"></div>
</div>