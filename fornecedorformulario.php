<?php include("cabecalho.php");?>

<div class="Container">
<form action="adicionafornecedor.php" method="post">
<h3>Cadastro de Fornecedores</h3>

 
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome">
  </div>

  <div class="form-group">
    <label for="cpf">CPF:</label>
    <input type="text" class="form-control" name="cpf">
 </div>

  <div class="form-group">
        <label for="empresa">Empresa:</label>
        <input type="text" class="form-control" name="empresa">
  </div>

  <div class="form-group">
        <label for="tipo_produto">Tipo de Produto:</label>
        <input type="text" class="form-control" name="tipo_produto">
  </div>

  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-warning">Cadastrar</button>
  </div>
</form>
</div>

<?php include("rodape.php");?>