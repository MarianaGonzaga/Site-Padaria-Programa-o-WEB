<?php include("cabecalho.php");
include("conecta.php");
include("bancoproduto.php");

$id = $_GET['id'];
removeproduto($conexao, $id);
?>
<p class="alert alert-success"> Produto <?=$id?> removido!</p>