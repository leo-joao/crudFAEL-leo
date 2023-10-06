<?php
require 'connection.php';

function ListarLojas($connection)
{

    $query = $connection->prepare("SELECT * FROM stores");

    $query->execute();

    $result = $query->fetchAll();

    $html = '';
    foreach ($result as $index) {
        $id = $index['id_store'];
        $name = $index['store_name'];
        $adress = $index['store_adress'];
        $city = $index['store_city'];
        $storeNumber = $index['store_facility_quantity'];

        $html .= "<tr id='$id'>
            <td>$id</td>
            <td>$name</td>
            <td>$adress</td>
            <td>$city</td>
            <td>$storeNumber</td>
            <td class='icones'><ion-icon class='delete' name='close' onclick=DeleteLoja($id)></ion-icon></td>
        </tr>";
    }

    return $html;
}
