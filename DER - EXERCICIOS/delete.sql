


-- Realiza a exclusão de TODO  o banco de Dados!
DROP DATABASE db_exemplo;

-- Realiza a exclusão de uma Tabela o Banco de Dados!
DROP TABLE db_exemplo;

DELETE FROM tb_usuario WHERE id_usuario = 1;

DELETE FROM tb_categoria WHERE id_categoria = 1;

DELETE FROM tb_movimento WHERE id_movimento IN (1, 2, 3, 4);