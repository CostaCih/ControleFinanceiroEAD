-- COMANDO PARA ATUALIZAR (UPDATE)
update tb_usuario set email_usuario = 'ana@hotmail.com',
                      senha_usuario = 'ana@123'
where id_usuario = 1;

update tb_empresa 
	set nome_empresa = 'NET/Claro',
	  telefone_empresa = '4333225588',
	  endereco_empresa = 'Rua Teste N321' where id_empresa = 2; 
      
update tb_empresa 
	set endereco_empresa = 'Rua dos colchões' where id_empresa = 1;       