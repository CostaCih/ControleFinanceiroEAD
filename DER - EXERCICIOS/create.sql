-- CRUD (Create Read Update Delete).
-- cREATE cADASTRAR!

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Ana Maria', 'ana_maria@gmail.com', 'ana321', '2024-12-06');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Alisson Rocha', 'alisson_rocha@gmail.com', 'ali333', '2024-12-06');

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Faculdade', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('NET/CLARO', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Financiamento', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Trabalho', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Faculdade', 2);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Cliente', 2);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('ZUA', '5533775757', 'Rod. Celso Garcia', 1);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Santander', '1111', '12345', 2500.00, 2);

insert into tb_usuario (nome_usuario, email_usuario, senha_usuario, data_cadastro) values ('Maria Eugênia', 'mareu@gmail.com', '987', '2024-12-06');

insert into tb_usuario (nome_usuario, email_usuario, senha_usuario, data_cadastro) values ('Sandra Teixeira', 'sandra_teixeira@gmail.com', '741', '2024-11-07');


insert into tb_usuario (nome_usuario, email_usuario, senha_usuario, data_cadastro) values ('Marco Aurelio Teixeira', 'marelio@gmail.com', '852', '2024-11-07');

INSERT INTO tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) VALUES ('Dogão ZL', '4333339651', 'Rua das Acacias, 297', 4);

INSERT INTO tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) VALUES ('Armarinhos Beija-Flor', '4333449651', 'Rua das Maritacas, 17', 5);

INSERT INTO tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) VALUES ('Alimentos Batatinhas', '439988-6078', 'Rua das Batatas, 22', 6);

INSERT INTO tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) VALUES ('Bolos Ana Maria', '439933-9651', 'Rua da Fermentação, 200', 7);


INSERT INTO tb_movimento (tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_conta, id_usuario) VALUES (1, '2024-12-20', 6500, 'Pagamento', 2, 1, 1, 1);


