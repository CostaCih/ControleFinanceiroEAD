-- CRUD 
-- READ

SELECT * FROM tb_usuario;

SELECT * FROM tb_categoria;

SELECT * FROM tb_empresa;

SELECT * FROM tb_conta;

SELECT * FROM tb_movimento;

SELECT * FROM tb_categoria WHERE id_usuario = 1;

SELECT * FROM tb_categoria WHERE id_usuario = 2; 

SELECT nome_usuario, data_cadastro
FROM tb_usuario
WHERE nome_usuario LIKE 'A%';

SELECT nome_usuario, data_cadastro
FROM tb_usuario
WHERE nome_usuario LIKE '%A';

SELECT nome_usuario, data_cadastro
FROM tb_usuario
WHERE nome_usuario LIKE '%A%';