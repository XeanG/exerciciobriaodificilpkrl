DROP TABLE IF EXISTS produtos;
CREATE TABLE produtos (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    preco DECIMAL(10, 2)
);

INSERT INTO produtos (id, nome, preco) VALUES
(1, 'Camiseta', 29.99),
(2, 'Calça jeans', 79.90),
(3, 'Tênis', 129.99),
(4, 'Relógio', 249.99),
(5, 'Notebook', 2599.99),
(6, 'Celular', 1899.00),
(7, 'Televisão', 3999.90),
(8, 'Fones de ouvido', 149.99),
(9, 'Cadeira de escritório', 699.00),
(10, 'Mesa de jantar', 1499.99);

CREATE TABLE usuarios (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome_completo VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  nome_de_usuario VARCHAR(30) NOT NULL,
  senha VARCHAR(30) NOT NULL
);