<?php include("cabecalho.php");
include("conecta.php");
include("bancofornecedor.php");

$id = $_GET['id'];
removeFornecedor($conexao, $id);
?>
<p class="alert alert-success"> Fornecedor <?=$id?> removido!</p>