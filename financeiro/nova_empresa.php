<?php

// ===================SESSÃO DO USÚARIO ============
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
// =================================================

require_once '../DAO/EmpresaDAO.php';

if (isset($_POST['btnSalvar'])) {
    $nome = trim($_POST['nome']);
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);

    $objdao = new EmpresaDAO();
    $ret = $objdao->CadastrarEmpresa($nome, $telefone, $endereco);
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Cadastrar Empresas.</h2>
                        <h5>Aqui você pode CADASTRAR todas as suas Empresas.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_empresa.php" method="POST">
                    <div class="form-group">
                        <label>Digite o Nome da Empresa:</label>
                        <input class="form-control" name="nome" placeholder="Digite o Nome da Empresa aqui..." id="nome" maxlength="50" />
                    </div>
                    <div class="form-group">
                        <label>Digite o Telefone (WhatsApp):</label>
                        <input class="form-control" name="telefone" placeholder="Digite o Telefone aqui..." id="telefone" />
                    </div>
                    <div class="form-group">
                        <label>Digite o Endereço da Empresa:</label>
                        <input class="form-control" name="endereco" placeholder="Digite o Endereço da Empresa aqui..." id="endereco" />
                    </div>
                    <button class="btn btn-success" name="btnSalvar">Salvar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
         $('#telefone').mask('(00) 0 0000-0000');
        });        
    </script>

</body>

</html>