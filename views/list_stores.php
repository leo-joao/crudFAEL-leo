<!DOCTYPE html>
<?php
require 'menu.php';
require '../model/connection.php';
require '../model/get_store_list.php';

?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../controllers/js/store_actions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<link rel="stylesheet" href="../libs/css/styles-main.css">

<div class="list_main">
    <p class="register_label">Estabelecimentos Cadastrados</p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Número de Filiais</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo ListarLojas($connection);
            ?>
        </tbody>
    </table>
</div>