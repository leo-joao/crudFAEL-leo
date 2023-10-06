<?php
require 'connection.php';


$json = file_get_contents('php://input');

$post = json_decode($json, true);

$idStore = $post['id'];

$query = $connection->prepare("SELECT 
	precos.id_price AS cod_preco,
	precos.id_product AS cod_produto,
	precos.id_store AS cod_loja,
	precos.price AS valor,
	produtos.product_name AS nome_produto,
	produtos.product_brand AS marca,
	produtos.product_measurement_unit AS un_medida,
	produtos.product_quantity AS quantidade
FROM
	prices AS precos
INNER JOIN
	products AS produtos
ON produtos.id_product = precos.id_product
LEFT JOIN (
    SELECT id_product, MIN(price) AS menor_preco
    FROM prices
    GROUP BY id_product
) AS precos_minimos ON precos.id_product = precos_minimos.id_product
WHERE precos.price = precos_minimos.menor_preco;
");

$query->execute();

$result = $query->fetchAll();


echo "<table>";
echo "<thead>
            <th>Id</th>
            <th>Produto</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Quantidade</th>
            <th>Un. Medida</th>
            <th>Preço</th>
        </thead>";

foreach ($result as $index) {
    if ($index['cod_loja'] != $idStore) {
        continue;
    }

    $id = $index['cod_preco'];
    $prodCode = $index['cod_produto'];
    $prodName = $index['nome_produto'];
    $brand = $index['marca'];
    $quantity = $index['quantidade'];
    $unit = $index['un_medida'];
    $value = $index['valor'];

    $quantity = str_replace(".", ",", $quantity);
    $value = "R$ " . str_replace(".", ",", $value);

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$prodCode</td>";
    echo "<td>$prodName</td>";
    echo "<td>$brand</td>";
    echo "<td>$quantity</td>";
    echo "<td>$unit</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}

echo "</table>";
