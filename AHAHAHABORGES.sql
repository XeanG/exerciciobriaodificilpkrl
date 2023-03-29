
DROP TABLE IF EXISTS produtos;
CREATE TABLE produtos (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  nome VARCHAR(50),
  preco DECIMAL(10, 2),
  PRIMARY KEY (id)
);

INSERT INTO produtos (nome, preco) VALUES
('Camiseta', 29.99),
('Calça jeans', 79.90),
('Tênis', 129.99),
('Relógio', 249.99),
('Notebook', 2599.99),
('Celular', 1899.00),
('Televisão', 3999.90),
('Fones de ouvido', 149.99),
('Cadeira de escritório', 699.00),
('Mesa de jantar', 1499.99);

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  nome_completo VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  nome_de_usuario VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  adm BOOLEAN NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO usuarios (nome_completo, email, nome_de_usuario, senha, adm) VALUES ('admin', '', 'admin', 'admin123', '1');

DROP TABLE IF EXISTS cartuchos;
CREATE TABLE cartuchos (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  nome_cartucho_cd VARCHAR(255) NOT NULL,
  ano INT(4) UNSIGNED NOT NULL,
  sistema VARCHAR(255) NOT NULL,
  id_usuario INT UNSIGNED NOT NULL,
  PRIMARY KEY (id)
 -- FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

DROP TABLE IF EXISTS arquivos;
CREATE TABLE arquivos (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL,
  nome VARCHAR(255),
  titulo VARCHAR(255),
  conteudo LONGBLOB,
  tipo VARCHAR(255),
  PRIMARY KEY (id)
);