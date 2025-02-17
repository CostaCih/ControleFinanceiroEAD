<?php

// ===================SESSÃO DO USÚARIO ============
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
// =================================================

require_once '/xampp/htdocs/ControleFinanceiroEAD/DAO/CategoriaDAO.php';

$objDAO = new CategoriaDAO();

// Uma variável que recebe um Array, será convertida também em um Array!
$categorias = $objDAO->ConsultarCategoria();

// echo '<pre>';
// var_dump($categorias);
// echo '</pre>';

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
                        <h2>Consultar Categorias Financeiras.</h2>
                        <h5>Aqui você pode CONSULTAR suas Categorias Financeiras cadastradas. </h5>
                        <?php include_once './_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Categorias Cadastradas -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span>Resultado da CONSULTA realizada:</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome da Categoria</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody> <?php for ($i = 0; $i < count($categorias); $i++) { ?>
                                                <tr>
                                                    <td><?= $categorias[$i]['nome_categoria'] ?></td>
                                                    <td><a href="alterar_categoria.php?cod=<?= $categorias[$i]['id_categoria'] ?>" class="btn btn-warning btn-sm">Alterar</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>

</html>