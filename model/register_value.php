<?php

require 'connection.php';

$json = file_get_contents('php://input');

$post = json_decode($json, true);

$product = $post['product'];
$shop = $post['shop'];
$price = $post['price'];

$query = $connection->prepare("INSERT INTO prices (id_product, id_store, price) VALUES ('$product', '$shop', '$price')");

$result = $query->execute();

echo json_encode($result);
