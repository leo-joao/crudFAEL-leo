<?php

require 'connection.php';

$json = file_get_contents('php://input');

$post = json_decode($json, true);

$name = $post['name'];
$address = $post['address'];
$city = $post['city'];
$shopAmount = $post['shopAmount'];

$query = $connection->prepare("INSERT INTO stores (store_name, store_adress, store_city, store_facility_quantity) VALUES ('$name', '$address', '$city', '$shopAmount')");

$result = $query->execute();

echo json_encode($result);
