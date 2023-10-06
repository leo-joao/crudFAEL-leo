<?php
require 'connection.php';

function ListarProdutos($connection)
{

    $query = $connection->prepare("SELECT * FROM products");

    $query->execute();

    $result = $query->fetchAll();

    $html = '';
    foreach ($result as $index) {
        $id = $index['id_product'];
        $name = $index['product_name'];
        $brand = $index['product_brand'];
        $quant = $index['product_quantity'];
        $unit = $index['product_measurement_unit'];

        $html .= "<tr id='$id'>
            <td>$id</td>
            <td>$name</td>
            <td>$brand</td>
            <td>$quant</td>
            <td>$unit</td>
            <td class='icones'><ion-icon class='delete' name='close' onclick=DeleteProduto($id)></ion-icon></td>
        </tr>";
    }

    return $html;
}
