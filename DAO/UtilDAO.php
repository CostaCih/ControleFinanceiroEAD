<?php

// Essa Classe tera a finalidade de criar a Sessão de Log do Usuário!

class UtilDAO
{
    //1° Passo: Inicia a Sessão do Usuário dando permissão!
    private static function IniciarSessao()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    //2° Passo:Essa function vai levantar e armazenar os dados de acesso do Usuário!
    public static function CriarSessao($cod, $nome)
    {
        self::IniciarSessao();

        $_SESSION['cod'] = $cod;
        $_SESSION['nome'] = $nome;
    }
    //3° Passo: Vamos receber o ID do Usuário para ser utilizado na Aplicação.
    public static function UsuarioLogado()
    {
        self::IniciarSessao();
        return $_SESSION['cod'];
    }
    //4° Passo: Vamos receber o     Nome do Usuário para ser utilizado na Aplicação.
    public static function NomeLogado()
    {
        self::IniciarSessao();
        return $_SESSION['nome'];
    }
    //5° Passo: Caso o usuário saia da Aplicação, toda a Sessão é limpada!
    public static function Deslogar()
    {
        self::IniciarSessao();
        unset($_SESSION['cod']);
        unset($_SESSION['nome']);

        header('location: index.php');
        exit;
    }


    //6° Passo: Essa function monitora se, existe dados do Usuário em Sessão, caso não, redireciona para a tela de Login.
    public static function VerificarLogado()
    {
        self::IniciarSessao();
        if (!isset($_SESSION['cod']) || $_SESSION['cod'] == '') {
            header('location: index.php');
            exit;
        }
    }

    public static function formatarTelefone($telefone) {
        $telefone = preg_replace("/[^0-9]/", "", $telefone);

        if (strlen($telefone) == 11) {
            return preg_replace("/(\d{2})(\d{1})(\d{4})(\d{4})/", "($1) $2 $3-$4", $telefone);
        } elseif (strlen($telefone) == 10) {
            return preg_replace("/(\d{2})(\d{4})(\d{4})/", "($1) $2-$3", $telefone);
        } else {
            return $telefone;
        }   
    }
}
