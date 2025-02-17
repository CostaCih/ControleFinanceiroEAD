select nome_usuario, data_cadastro
	from tb_usuario;
    
 -- USUARIO QUE CONTENHA A LETRA N E TODO O NOME
 
 select nome_usuario, data_cadastro
	from tb_usuario
   where nome_usuario like '%n%'; 
   
   -- USUARIO QUE CONTENHA A LETRA C NA INCIAL O NO NOME
   
 select nome_usuario, data_cadastro
	from tb_usuario
   where nome_usuario like 'C%';
   
   -- USUARIO QUE TERMINE COM A LETRA R
   
    select nome_usuario, data_cadastro
	from tb_usuario
   where nome_usuario like '%r';
   
   -- BUSCAR USUÁRIOS EM UM PERÍODO ESPECÍFICO DE CADASTRO
   
    select nome_usuario, data_cadastro
	from tb_usuario
   where data_cadastro between '2024-10-01' and '2024-12-07';
   
-- BUSCAR BANCO, AGENCIA E SALDO DE UM DETERMINAOD USUARIO

select banco_conta, agencia_conta, saldo_conta
	from tb_conta
    where id_usuario = 1;
    
  -- BUSCANDO ALTERAÇÕES DO USUARIO
  
 select tipo_movimento, data_movimento, valor_movimento, nome_categoria, nome_empresa, nome_usuario, banco_conta
		from tb_movimento
inner join tb_categoria
		on	tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
		on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario
		on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
		on tb_conta.id_conta = tb_movimento.id_conta
   where tb_movimento.tipo_movimento = 1;      
   
   
-- BUSCAR MAIS DE UM FILTRO

 select tipo_movimento, data_movimento, valor_movimento, nome_categoria, nome_empresa, nome_usuario, banco_conta
		from tb_movimento
inner join tb_categoria
		on	tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
		on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario
		on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
		on tb_conta.id_conta = tb_movimento.id_conta
   where tb_movimento.tipo_movimento = 1
   and tb_movimento.valor_movimento > 50; 
   
   
 select tipo_movimento, date_format(data_movimento, "%d/%m/%Y") as data_movimento, valor_movimento, nome_categoria, nome_empresa, nome_usuario, banco_conta, obs_movimento
		from tb_movimento
inner join tb_categoria
		on	tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
		on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario
		on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
		on tb_conta.id_conta = tb_movimento.id_conta
where tb_movimento.obs_movimento is not null;

-- SELECT USANDO UMA DUNCAO DO MYSQL

select sum(valor_movimento) as total
	from tb_movimento
  where tipo_movimento = 2;
  
  