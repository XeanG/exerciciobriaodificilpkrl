CREATE TABLE cartuchos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_cartucho_cd VARCHAR(255) NOT NULL,
  sistema VARCHAR(255),
  tela VARCHAR(255)

);

ALTER TABLE cartuchos ADD COLUMN id_usuario INT NOT NULL; -- (nao sei se isso é fora ou dentro, dps vc se vira)