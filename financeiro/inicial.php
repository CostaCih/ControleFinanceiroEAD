<?php

// ===================SESSÃO DO USÚARIO ============
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
// =================================================

require_once '../DAO/MovimentoDAO.php';

$objDAO = new MovimentoDAO();

$total_entrada = $objDAO->TotalEntrada();
$total_saida = $objDAO->TotalSaida();
$movs = $objDAO->MostrarUltimosMovimentos();


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php';
?>

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
                        <h2>Página Inicial</h2>
                        <h5>Seja bem vindo(a), <?= UtilDAO::NomeLogado() ?>! Todos os Módulos de trabalho você pode acessar no MENU lateral.</h5>
                        <?php include_once '../financeiro/_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr/>

                <div class="col-md-6">                       
                            <div class="panel panel-primary text-center no-boder bg-color-green">
                                <div class="panel-body">
                                    <i class="fa fa-bar-chart-o fa-5x"></i>
                                    <h3>R$ <?= $total_entrada[0]['total'] != null ? number_format($total_entrada[0]['total'], 2, ',' , '.') : '0' ?></h3>
                                </div>
                                <div class="panel-footer back-footer-green">
                                    TOTAL DE ENTRADA

                                </div>
                            </div>
                 </div>
                <div class="col-md-6">                       
                            <div class="panel panel-primary text-center no-boder bg-color-red">
                                <div class="panel-body">
                                    <i class="fa fa-bar-chart-o fa-5x"></i>
                                    <h3>R$ <?= $total_saida[0]['total'] != '' ? number_format($total_saida[0]['total'], 2, ',' , '.') : '0' ?></h3>
                                </div>
                                <div class="panel-footer back-footer-red">
                                    TOTAL DE SAÍDA

                                </div>
                            </div>
                  </div>
						
			<hr>
			 <?php if (count($movs) > 0) { ?>
                    <hr>
                    <!-- Empresas Cadastradas -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span>Últimos 10 lançamentos de Movimentos:</span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="alignBtn">ID</th>
                                            <th class="alignBtn">Tipo de Movimento</th>
                                            <th class="alignBtn">Data</th>
                                            <th class="alignBtn">Valor</th>
                                            <th class="alignBtn">Categoria</th>
                                            <th class="alignBtn">Empresa</th>
                                            <th class="alignBtn">Conta Bancária</th>
                                            <th class="alignBtn">Observação</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Uma Variável que sera subscrita quando receber o valor do movimento para impressão na tela!
                                        $total = 0;

                                        for($i=0; $i < count($movs); $i++){
                                            if($movs[$i]['tipo_movimento'] == 1) {
                                                $total = $total + $movs[$i]['valor_movimento'];
                                            } else {
                                                $total = $total - $movs[$i]['valor_movimento'];
                                            }

                                        ?>
                                            <tr>
                                                <td><?= $i+1 ?></td>
                                                <td>
                                                    <?= $movs[$i]['tipo_movimento'] == 1 ? '<strong style="color: #006400;">Entrada</strong>' : '<strong style="color: #ff0000;">Saída</strong>' ?>
                                                </td>
                                                <td><?= $movs[$i]['data_movimento'] ?></td>
                                                <td>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                <td><?= $movs[$i]['nome_categoria'] ?></td>
                                                <td><?= $movs[$i]['nome_empresa'] ?></td>
                                                <td>
                                                    <?= $movs[$i]['banco_conta'] ?> | Agência: <?= $movs[$i]['agencia_conta'] ?> | N. Conta: <?= $movs[$i]['numero_conta'] ?> | Saldo: R$ <?= number_format($movs[$i]['saldo_conta'], 2, ',', '.') ?>
                                                </td>
                                                <td><?= $movs[$i]['obs_movimento'] ?></td>                                                
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div style="text-align: center;">
                                    <strong>Total: </strong>
                                    <span style="color: <?= $total < 0 ? '#ff0000' : "#006400" ?>;">
                                        <strong>R$ <?= number_format($total, 2, ',', '.') ?></strong>
                                                         </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
            </div>
        </div>
    <?php }else{ ?>
	   <div class="alert alert-danger col-md-12">
                 Não existe nenhum movimento para ser exibido!
             </div>
	  <?php } ?> 	

    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <script>
        // Quando o clique for pressionado, o tipo senha é convertido em texto!
        $("#olho").mousedown(function(){
            $("#senha").attr("type", "text");
        });

        // Quando o clique for solto, o tipo texto é convertido em senha!
        $("#olho").mouseup(function(){
            $("#senha").attr("type", "password");
        });

        
    </script>
</body>
</html>