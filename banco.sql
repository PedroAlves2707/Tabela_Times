CREATE DATABASE sistema_times;
USE sistema_times;

CREATE TABLE time (
id INT NOT NULL AUTO_INCREMENT , 
nome VARCHAR(100) NOT NULL ,
qtdTitulos INT NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO time (nome, qtdTitulos)
VALUES
('Palmeiras', 12),
('Santos', 8),
('Flamengo', 7),
('São Paulo', 6),
('Corinthians', 7),
('Cruzeiro', 4),
('Vasco', 4),
('Fluminense', 4);

SELECT * FROM time;
