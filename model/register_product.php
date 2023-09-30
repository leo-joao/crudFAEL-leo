<?php

require 'connection.php';

$json = file_get_contents('php://input');

$post = json_decode($json, true);

$name = $post['name'];
$brand = $post['brand'];
$amount = $post['amount'];
$unit = $post['unit'];

$query = $connection->prepare("INSERT INTO products (product_name, product_brand, product_quantity, product_measurement_unit) VALUES ('$name', '$brand', '$amount', '$unit')");

$result = $query->execute();

echo json_encode($result);
