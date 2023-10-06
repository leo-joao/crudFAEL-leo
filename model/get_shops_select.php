<?php
require 'connection.php';

function GerarSelectLojas($connection)
{

    $query = $connection->prepare("SELECT * FROM stores");

    $query->execute();

    $result = $query->fetchAll();

    $htmlSelect = "<select id='select_shop' name='select_shop' style='padding: 3px; width: 100%; height: 40px; font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;>
    <option selected disabled>Selecione</option>";

    $htmlOptions = '';
    foreach ($result as $index) {
        $id = $index['id_store'];
        $name = $index['store_name'];

        $htmlOptions .= "<option value='$id'>$name</option>";
    }

    return $htmlSelect . $htmlOptions . "</select>";
}
