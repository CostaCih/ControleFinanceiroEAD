<?php

// ===================SESSÃO DO USÚARIO ============
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
// =================================================

require_once '../DAO/ContaDAO.php';

if(isset($_POST['btnSalvar'])){
    $banco = trim($_POST['banco']);
    $agencia = trim($_POST['agencia']);
    $conta = trim($_POST['conta']);
    $saldo = trim($_POST['saldo']);

    $objdao = new ContaDAO();
    $ret = $objdao->CadastrarConta($banco, $agencia, $conta, $saldo);
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php';?>

<body>
    <div id="wrapper">
        <?php include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Cadastrar Contas Bancárias.</h2>
                        <h5>Aqui você pode CADASTRAR todas as suas Contas Bancárias. </h5>
                        <?php include_once '../financeiro/_msg.php';?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_conta.php" method="post">
                <div class="form-group">
                    <label>Digite o Nome do Banco</label>
                    <input class="form-control" name="banco" placeholder="Digite o Nome do Banco aqui..." id="banco" maxlength="20"/>
                </div>
                <div class="form-group">
                    <label>Digite a Agência:</label>
                    <input class="form-control" name="agencia" placeholder="Digite a Agência aqui..." id="agencia" />
                </div>
                <div class="form-group">
                    <label>Digite o Número da Conta:</label>
                    <input class="form-control" name="conta" placeholder="Digite o Número da Conta aqui..." id="conta"/>
                </div>
                <div class="form-group">
                    <label>Digite o Saldo (R$):</label>
                    <input class="form-control" name="saldo" placeholder="Digite o Saldo da Conta aqui..." id="saldo"/>
                </div>
                <button class="btn btn-success" name="btnSalvar">Salvar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>
</html>