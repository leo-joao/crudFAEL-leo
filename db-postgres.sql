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

INSERT INTO users (id_user, user_name, user_pwd)
VALUES (1, 'admin', 'admin');

INSERT INTO products (product_name, product_brand, product_quantity, product_measurement_unit)
VALUES
('Leite Integral', 'Tirol', 1, 'litro'),
('Leite Desnatado', 'Tirol', 1, 'Litro'),
('Carne Bovina', 'JBS', 1, 'Kg'),
('Carne Bovina', 'Seara', 1, 'Kg'),
('Carne Suína', 'JBS', 1, 'Kg'),
('Carne Suína', 'Seara', 1, 'Kg'),
('Bolacha Maria', 'Marca 123', 800, 'Gramas'),
('Feijão Preto', 'Caldo Marrom', 1, 'Kg'),
('Arroz Branco', 'Urbano', 1, 'Kg'),
('Arroz Parboilizado', 'Urbano', 1, 'Kg'),
('Arroz Branco', 'Urbano', 5, 'Kg'),
('Arroz Parboilizado', 'Urbano', 5, 'Kg'),
('Açúcar Refinado', 'Caravelas', 5, 'Kg'),
('Açúcar Refinado', 'União', 5, 'Kg')
;

INSERT INTO stores (store_name, store_adress, store_city, store_facility_quantity)
VALUES
('Loja do Porgado', 'Rua das Varejeiras, 532', 'São Leopoldo', 1),
('Mercado Ado', 'Avenida do Tonho, 111', 'Mafra', 3),
('Padaria do Zé', 'Estrada Central, 123', 'Cosmopolis', 2),
('Mercadon Line', '', '', 1),
('Hipermercado Condor', 'Avenida das Torres, 200', 'Itapoa', 1)
;

