CREATE DATABASE gpf CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE gpf;

CREATE TABLE products (
  product_id INT PRIMARY KEY AUTO_INCREMENT,
  product_name VARCHAR(255),
  product_description TEXT,
  product_category VARCHAR(225),
  product_price DOUBLE,
  product_image VARCHAR(225),
  product_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  
);


-- Eletrônicos
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created) VALUES
('Smartphone', 'Smartphone de última geração com câmera de alta resolução e processador rápido.', 'Eletronicos', '1200.00', '3e.jpg', '2024-03-12 10:11:12'),
('Notebook', 'Notebook leve e potente, perfeito para trabalho e entretenimento.', 'Eletronicos', '1754.99', '7e.jpg', '2024-03-11 12:11:12'),
('Geladeira', 'Geladeira moderna e potênte', 'Eletronicos', '5654.99', '6e.jpg', '2024-02-15 12:11:12'),
('Ar condicionado', 'Ar condicionado de alta potência.', 'Eletronicos','2540.00', '5e.jpg', '2024-04-03 10:15:12');

-- Alimentos
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created) VALUES
('Vinho', 'Vinho Seco do ano 1850', 'Alimentos', '750.00', '1c.png', '2024-01-12 10:11:12'),
('Queijo', 'Queijo amarelo', 'Alimentos', '54.00', '2c.png', '2024-01-21 12:11:12'),
('Carne', 'Saborosa carne', 'Alimentos', '41.90', '4c.png', '2024-03-22 12:11:12'),
('Biscoito', 'Biscoitos adocicados, Suave e Saboroso', 'Alimentos','14.00', '5c.png', '2024-01-01 08:15:12');

-- Maquiagem
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created) VALUES
('Kit Batom', 'Nesse belo Kit contém 3 batons vermelhos, com formato para todos os lábios ', 'Maquiagem', '52.00', '1m.jpg', '2024-02-09 11:11:12'),
('Delineador', 'Delineador para deixar seus olhos mais marcantes', 'Maquiagem', '23.99', '2m.jpg', '2024-04-01 12:11:12'),
('Rímel', 'Dê um brilho a mais para seu olhar', 'Maquiagem','19.98', '3m.jpg', '2024-01-05 08:15:12');

-- Perfumes
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created) VALUES
('Cherry Blue', 'Perfume Feminino, com notas oceanicas e florais ', 'Perfumes', '215.00', '1p.png', '2024-02-02 11:11:12'),
('Shades of Grey', 'Perfume Masculino com notas metalicas e ambaradas com toque de ambroxan ', 'Perfumes', '311.00', '2p.png', '2024-04-01 12:11:12'),
('Fruit Power', 'Perfume Feminino com notas florais e dulcor de frutas silvestres', 'Perfumes','105.00', '3p.png', '2024-01-01 08:15:12');

-- Roupas
INSERT INTO products (product_name, product_description, product_category, product_price, product_image, product_created) VALUES
('Vestido Preto', 'Vestico colado na cor preta', 'Roupas', '120.00', '1r.png', '2024-02-12 10:11:12'),
('Jaqueta', 'Elegante jaqueta', 'Roupas', '300.00', '2r.png', '2024-02-06 12:11:12'),
('Vestido Rosa', 'Vestido elegante rosa', 'Roupas', '142.90', '4r.png', '2024-02-14 12:11:12');

