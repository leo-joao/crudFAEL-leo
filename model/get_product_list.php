<?php
require 'connection.php';

function ListarProdutos($connection)
{

    $query = $connection->prepare("SELECT * FROM products");

    $query->execute();

    $result = $query->fetchAll();

    $htmlSelect = "";

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
