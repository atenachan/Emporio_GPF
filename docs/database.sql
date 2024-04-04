CREATE DATABASE gpf CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE gpf;

CREATE TABLE products (
  product_id INT PRIMARY KEY AUTO_INCREMENT,
  product_name VARCHAR(255),
  product_description TEXT,
  product_category VARCHAR(225),
  product_price DOUBLE,
  product_image VARCHAR(225),
  product_created DATETIME,
  product_modified DATETIME
);


-- Eletrônicos
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created, product_modified) VALUES
('Smartphone', 'Smartphone de última geração com câmera de alta resolução e processador rápido.', 'Eletrônicos', 999.99, 'smartphone.jpg', NOW(), NOW()),
('Notebook', 'Notebook leve e potente, perfeito para trabalho e entretenimento.', 'Eletrônicos', 1299.99, 'notebook.jpg', NOW(), NOW()),
('Fone de Ouvido Bluetooth', 'Fone de ouvido sem fio com cancelamento de ruído e longa duração de bateria.', 'Eletrônicos', 149.99, 'fone_de_ouvido.jpg', NOW(), NOW());

-- Roupas
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created, product_modified) VALUES
('Camiseta Masculina', 'Camiseta básica de algodão com gola redonda.', 'Roupas', 19.99, 'camiseta_masculina.jpg', NOW(), NOW()),
('Vestido Feminino', 'Vestido elegante e confortável para diversas ocasiões.', 'Roupas', 39.99, 'vestido_feminino.jpg', NOW(), NOW()),
('Calça Jeans', 'Calça jeans moderna e ajustada para um look casual.', 'Roupas', 29.99, 'calca_jeans.jpg', NOW(), NOW());

-- Maquiagem
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created, product_modified) VALUES
('Base Líquida', 'Base líquida de alta cobertura com acabamento matte.', 'Maquiagem', 24.99, 'base_liquida.jpg', NOW(), NOW()),
('Batom Matte', 'Batom de longa duração com efeito matte em diversas cores.', 'Maquiagem', 12.99, 'batom_matte.jpg', NOW(), NOW()),
('Paleta de Sombras', 'Paleta de sombras com diversas cores para criar diferentes looks.', 'Maquiagem', 29.99, 'paleta_sombras.jpg', NOW(), NOW());

-- Alimentos
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created, product_modified) VALUES
('Arroz Integral', 'Arroz integral orgânico, fonte de fibras e nutrientes.', 'Alimentos', 4.99, 'arroz_integral.jpg', NOW(), NOW()),
('Azeite de Oliva Extra Virgem', 'Azeite de oliva de alta qualidade para temperar saladas e pratos.', 'Alimentos', 9.99, 'azeite_oliva.jpg', NOW(), NOW()),
('Chocolate Amargo', 'Chocolate amargo com alto teor de cacau, perfeito para os amantes de chocolate.', 'Alimentos', 3.99, 'chocolate_amargo.jpg', NOW(), NOW());

-- Perfumes
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created, product_modified) VALUES
('Perfume Masculino', 'Fragrância masculina com notas amadeiradas e cítricas.', 'Perfumes', 49.99, 'perfume_masculino.jpg', NOW(), NOW()),
('Perfume Feminino', 'Perfume feminino floral com toques frutados e delicados.', 'Perfumes', 59.99, 'perfume_feminino.jpg', NOW(), NOW()),
('Perfume Unissex', 'Perfume unissex com aroma refrescante e notas herbais.', 'Perfumes', 39.99, 'perfume_unissex.jpg', NOW(), NOW());
