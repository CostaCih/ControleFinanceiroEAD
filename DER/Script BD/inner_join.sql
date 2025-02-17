-- INER JOIN - Relatórios com Multipolos Dados de Multiplas Tabelas.

-- Atividades Com Filtro:
-- • Filtre todos os dados da tb_movimento com tipo_movimento 1

SELECT * FROM tb_categoria WHERE id_usuario = 1;

-- • Filtre todos os dados da tb_movimento com tipo_movimento 2

SELECT * FROM tb_categoria WHERE id_usuario = 2; 

-- • Filtre todos os nomes que possui a letra a
SELECT nome_usuario, data_cadastro
FROM tb_usuario
WHERE nome_usuario LIKE '%a%';

-- • Filtre todos os nomes que possui a letra d
SELECT nome_usuario, data_cadastro
FROM tb_usuario
WHERE nome_usuario LIKE '%d%';

-- • Filtre todos os nomes que possui a letra b
SELECT nome_usuario, data_cadastro
FROM tb_usuario
WHERE nome_usuario LIKE '%b%';

-- ENTRE DATAS
-- Filtre todos os cadastros realizados na data do dia 28/09 até 04/02 nas tabelas: tb_usuario. tb_movimento.
SELECT data_cadastro, data_movimento
	FROM tb_usuario
INNER JOIN tb_movimento
		ON tb_movimento.id_usuario = tb_usuario.id_usuario
WHERE data_movimento BETWEEN '2024-01-01' AND '2024-12-20';    


-- Atividades Com Inner Join E Filtro:
-- Busque: nome_usuario e nome_categoria cadastrados
SELECT nome_usuario, nome_categoria
		FROM tb_usuario
INNER JOIN tb_categoria
		ON tb_categoria.id_usuario = tb_usuario.id_usuario;	

-- Busque: nome_usuario, email_usuario, banco_conta, saldo_conta, numero_conta cadastrados        
SELECT nome_usuario, email_usuario, banco_conta, saldo_conta, numero_conta
		FROM tb_usuario
INNER JOIN tb_conta
		ON tb_conta.id_usuario = tb_usuario.id_usuario;	       

-- Busque: nome_categoria, nome_empresa, nome_usuario, data_movimento, valor_movimento, tipo_movimento cadastrados        
SELECT nome_usuario, nome_categoria, nome_empresa, tipo_movimento, data_movimento, valor_movimento
		FROM tb_usuario
INNER JOIN tb_categoria
		ON tb_categoria.id_usuario = tb_usuario.id_usuario
INNER JOIN tb_empresa
		ON tb_empresa.id_usuario = tb_usuario.id_usuario
INNER JOIN tb_movimento
		ON tb_movimento.id_usuario = tb_usuario.id_usuario;	
        
-- Busque: Todas as colunas de todas as tabelas do Bancco de Dados (Obrigatório uso de Inner Join).
 SELECT nome_usuario, email_usuario, senha_usuario, data_cadastro, nome_categoria, nome_empresa, telefone_empresa, endereco_empresa, banco_conta, agencia_conta, numero_conta, saldo_conta, tipo_movimento, data_movimento, valor_movimento, obs_movimento
	FROM tb_usuario as us
INNER JOIN tb_categoria as ctg
		ON ctg.id_usuario = us.id_usuario
INNER JOIN tb_empresa as emp
		ON emp.id_usuario = us.id_usuario
INNER JOIN tb_conta as money
		ON money.id_usuario = us.id_usuario
INNER JOIN tb_movimento as caixa
		ON caixa.id_usuario = us.id_usuario;	