<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class CategoriaDAO extends Conexao{
    public function CadastrarCategoria($nomeCategoria){
        if ($nomeCategoria == ''){
            return 0;
        }else{
           // return 1;

           // 1° Passo: Criar uma variável para receber a Conexão!
           $conexao = parent::retornarConexao();

           // 2° Passo: Vamos criar o ScriptSQL que será executado no Banco de Dados pelo PDO!
           $comando_sql = 'INSERT INTO tb_categoria(nome_categoria, id_usuario) VALUES(?, ?);';

           // 3° Passo: Criar um Objeto com os recursos do PDO.
           // PDO: Função Nativa do PHP para gerir ações no Banco de Dados!
           $sql = new PDOStatement();

           // 4° Passo: Vamos adicionar um processo no Objeto sql para preparar a execução do Script SQL no Banco de Dados!
           $sql = $conexao->prepare($comando_sql);

           // 5° Passo: Vamos identificar e validar o que esta sendo passado para o Banco de Dados!
           $sql->bindValue(1, $nomeCategoria);
           $sql->bindValue(2, UtilDAO::UsuarioLogado());

           // 6° Passo: Vamos tentar executar o código desenvolvido!
           try{
                $sql->execute();
                return 1;
           }catch(Exception $ex){
                echo $ex->getMessage();
                return -1;
           }

        }
    }

    public function ConsultarCategoria(){
        $conexao = parent::retornarConexao();
        
        $comando_sql = 'SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_usuario = ? ORDER BY nome_categoria ASC;';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        // Realiza a consulta no Banco de Dados via PDO, monta e retorna um Array com tudo que foi mostrado!
        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();
        return $sql->fetchAll();
    }

    // Identifica e seleciona os Dados referente ao ID que vai ser alterado ou excluido!
    public function DetalharCategoria($idCategoria){
        if($idCategoria == ''){
            return 0;
        }else{
            $conexao = parent::retornarConexao();

            $comando_sql = 'SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_categoria = ? AND id_usuario = ?;';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $i = 1;

            $sql->bindValue($i++, $idCategoria);
            $sql->bindValue($i++, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();

        }
    }

    public function AlterarCategoria($nomeCategoria, $idCategoria){
        if($nomeCategoria == '' || $idCategoria == ''){
            return 0;
        }else{
          // return 1;

            $conexao = parent::retornarConexao();

            $comando_sql = 'UPDATE tb_categoria SET nome_categoria = ? WHERE id_categoria = ? AND id_usuario = ?;';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $i = 1;

            $sql->bindValue($i++, $nomeCategoria);
            $sql->bindValue($i++, $idCategoria);
            $sql->bindValue($i++, UtilDAO::UsuarioLogado());

            try{
                $sql->execute();
                return 1;
            }catch(Exception $ex){
                echo $ex->getMessage();
                return -1;
            }

        }
    }

    public function ExcluirCategoria($idCategoria){
        if($idCategoria == ''){
            return 0;
        }else{    

            $conexao = parent::retornarConexao();

            $comando_sql = 'DELETE FROM tb_categoria WHERE id_categoria = ? AND id_usuario = ?';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $idCategoria);
            $sql->bindValue(2, UtilDAO::UsuarioLogado());

            try{
                $sql->execute();
                return 1;
            }catch(Exception $ex){
                echo $ex->getMessage();
                return -4;
            }
        }    
    }
}
