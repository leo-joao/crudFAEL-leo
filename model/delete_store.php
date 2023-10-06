<?php

require 'connection.php';

$json = file_get_contents('php://input');

$post = json_decode($json, true);

$id = $post['id'];

$query = $connection->prepare("DELETE FROM stores WHERE id_store = $id");

$result = $query->execute();

echo json_encode($result);
