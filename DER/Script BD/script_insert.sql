-- COMANDO PARA INSERIR
-- insert into nome_da_tabela (colunas) value (valores)

insert into tb_usuario (nome_usuario, email_usuario, senha_usuario, data_cadastro) values ('Ana Maria', 'ana@gmail.com', '123', '2024-12-06');

insert into tb_usuario (nome_usuario, email_usuario, senha_usuario, data_cadastro) values ('Carlos Junior', 'carlos@gmail.com', '456', '2024-11-07');

insert into tb_usuario (nome_usuario, email_usuario, senha_usuario, data_cadastro) values ('Alexandre Junior', 'alexandre@gmail.com', '789', '2024-10-08');

-- INSERINDO CATEGORIA

insert into tb_categoria (nome_categoria, id_usuario) value ('Alimentação', 1);

insert into tb_categoria (nome_categoria, id_usuario) value ('Viagens', 2);

-- INSERINDO EMPRESA

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) value ('Empresa Colchão', '43999990000', 'Rua dos colchões', 1);

insert into tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) value ('Empresa comida boa', '4399990101', 'Rua dos restaurantes', 2);

-- INSERINDO CONTA

insert into tb_conta (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario) value ('Santander', '1122', '112233', 4500.20, 1);

insert into tb_conta (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario) value ('Itau', '3344', '335566', 5678.89, 2);

-- INSERINDO MOVIMENTO

insert into tb_movimento (tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario) value (1, '2024-12-06', 45, null, 1, 1, 1, 1);

insert into tb_movimento (tipo_movimento, data_movimento, valor_movimento,obs_movimento, id_empresa, id_conta, id_categoria, id_usuario) value (2, '2024-11-07', 34.12, 'Pagamento adiantado', 2, 2, 2, 2);



