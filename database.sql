CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    data_nasc DATE,
    cpf VARCHAR(14) NOT NULL,
    senha VARCHAR(255) NOT NULL
);



INSERT INTO usuarios (nome, usuario, email, data_nasc, cpf, senha)
VALUES
    ('João Silva', 'joao123', 'joao.silva@email.com', '1990-05-15', '123.456.789-01', 'senha123'),
    ('Maria Oliveira', 'maria456', 'maria.oliveira@email.com', '1985-08-20', '987.654.321-02', 'senha456'),
    ('Carlos Santos', 'carlos789', 'carlos.santos@email.com', '1992-03-10', '456.789.012-03', 'senha789'),

