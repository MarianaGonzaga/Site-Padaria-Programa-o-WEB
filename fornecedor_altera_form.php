<?php include("cabecalho.php");
include("conecta.php");
include("bancofornecedor.php");
$id = $_GET['id'];
$fornecedor = buscaFornecedor($conexao, $id);
?>

<div class="Container">

<form action="alterafornecedor.php" method="post">
<h3>Alterar Fornecedores</h3>

  <input type="hidden" name="id" value="<?=$fornecedor['id']?>" />

  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome" value="<?=$fornecedor['nome']?>">
  </div>

  <div class="form-group">
    <label for="cpf">CPF:</label>
    <input type="text" class="form-control" name="cpf" value="<?=$fornecedor['cpf']?>">
 </div>

  <div class="form-group">
        <label for="empresa">Empresa:</label>
        <input type="text" class="form-control" name="empresa" value="<?=$fornecedor['empresa']?>">
  </div>

  <div class="form-group">
        <label for="tipo_produto">Tipo de Produto:</label>
        <input type="text" class="form-control" name="tipo_produto" value="<?=$fornecedor['tipo_produto']?>">
  </div>

  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-warning">Alterar</button>
  </div>
</form>
</div>

<?php include("rodape.php");?>