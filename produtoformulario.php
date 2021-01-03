<?php include("cabecalho.php");
include("banco_categoria.php");
include("conecta.php");
$categorias = listaCategorias($conexao);
?>

<div class="Container">
<form action="adicionaproduto.php" method="post">
<h3>Formulário de Produtos</h3>

  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome">
  </div>

  <div class="form-group">
    <label for="preco">Preço:</label>
    <input type="numero" class="form-control" name="preco">
  </div>

  <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control" name="descricao"></textarea>
  </div>
  <div class="form-group">
        <label for="fabricacao">Data de Fabricação:</label>
        <input type="numeric" class="form-control" name="fabricacao">
  </div>
  <div class="form-group">
        <label for="validade">Validade:</label>
        <input type="numeric" class="form-control" name="validade">
  </div>

  <div class="form-group">
    <tr>
      <td>Categoria</td>
      <td>
          <select name="categoria_id">
          <?php foreach($categorias as $categoria) : ?>
          <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></br>
          <?php endforeach ?>
          </select>
      </td>
    </tr>
  </div>
      <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-warning">Cadastrar</button>
      </div>
</form>
</div>

<?php include("rodape.php");?>