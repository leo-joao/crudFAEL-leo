<?php
require 'connection.php';

function GerarSelectProdutos($connection)
{

    $query = $connection->prepare("SELECT * FROM products");

    $query->execute();

    $result = $query->fetchAll();

    $htmlSelect = "<select id='select_prod' name='select_prod' style='padding: 3px; width: 100%; height: 40px; font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;'>
    <option selected disabled>Selecione</option>";

    $htmlOptions = '';
    foreach ($result as $index) {
        $id = $index['id_product'];
        $name = $index['product_name'];
        $brand = $index['product_brand'];
        $quant = $index['product_quantity'];
        $unit = $index['product_measurement_unit'];

        $htmlOptions .= "<option value='$id'>$name - $brand - $quant $unit</option>";
    }

    return $htmlSelect . $htmlOptions . "</select>";
}
