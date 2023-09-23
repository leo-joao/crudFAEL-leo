/* 
                DISCLAIMER
SQL do banco do CRUD da FAEL - Léo João Franco dos Santos

O SQL em questão está feito de modo a ser compatível com o PostgreSQL
Para usar ele em outro banco será necessário algumas adaptações
*/


CREATE TABLE users (
	id_user SERIAL PRIMARY KEY,
	user_name VARCHAR(150) NOT NULL,
	user_pwd VARCHAR(500)
);

CREATE TABLE products (
	id_product SERIAL PRIMARY KEY,
	product_name VARCHAR(150) NOT NULL,
	product_brand VARCHAR(150) NOT NULL,
	product_quantity NUMERIC(10, 2) NOT NULL,
	product_measurement_unit VARCHAR(50) NOT NULL
);

CREATE TABLE stores(
	id_store SERIAL PRIMARY KEY,
	store_name VARCHAR(150) NOT NULL,
	store_adress VARCHAR(150),
	store_city VARCHAR(150),
	store_facility_quantity INT
);

CREATE TABLE prices (
    id_price SERIAL PRIMARY KEY,
    id_product INT NOT NULL,
    id_store INT NOT NULL,
    price NUMERIC(10, 2) NOT NULL,
    FOREIGN KEY (id_product) REFERENCES products(id_product),
    FOREIGN KEY (id_store) REFERENCES stores(id_store)
);