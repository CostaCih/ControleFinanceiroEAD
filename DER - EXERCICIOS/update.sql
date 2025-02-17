

UPDATE tb_usuario
	SET nome_usuario = 'Pedro Alves'
WHERE id_usuario = 3;

UPDATE tb_usuario
	SET email_usuario = 'pedro.alves@gmail.com',
		senha_usuario = 'pdr987'
WHERE id_usuario = 3;        

UPDATE tb_usuario
	SET nome_usuario = 'Julia Roberta',
		email_usuario = 'julia_roberta@outlook.com',
		senha_usuario = 'jul654'
WHERE id_usuario = 4;    

UPDATE tb_empresa
	SET id_usuario = 3
WHERE id_empresa = 3;

UPDATE tb_empresa
	SET endereco_empresa = 'Rua das Acacias, 297'
WHERE id_empresa = 3;   

UPDATE tb_empresa
	SET nome_empresa = 'Armarinhos Beija-Flor',
		endereco_empresa = 'Rua das Maritacas, N.17'
WHERE id_empresa = 4; 

UPDATE tb_empresa
	SET nome_empresa = 'Alimentos Batatinha',
		endereco_empresa = 'Rua das Batatas, N.22'
WHERE id_empresa = 5; 

UPDATE tb_empresa
	SET nome_empresa = 'Bolos Ana Maria',
		endereco_empresa = 'Rua da Fermentacao, N.200'
WHERE id_empresa = 6;

UPDATE tb_empresa
	SET nome_empresa = 'Moveis Amaral',
		endereco_empresa = 'Avenida Brasil, N.1750'
WHERE id_empresa = 7;  

UPDATE tb_categoria
	SET nome_categoria = 'Faculdade'
WHERE id_usuario = 3;  

