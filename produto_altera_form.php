<?php include("cabecalho.php");
include("banco_categoria.php");
include("bancoproduto.php");
include("conecta.php");
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
?>

<div class="Container">
<form action="alteraproduto.php" method="post">
<h3>Alteração de Produto</h3>

  <input type="hidden" name="id" value="<?=$produto['id']?>" />
  
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>">
  </div>

  <div class="form-group">
    <label for="preco">Preço:</label>
    <input  class="form-control" type="number" name="preco" value="<?=$produto['preco']?>">
  </div>

  <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
  </div>
  <div class="form-group">
        <label for="fabricacao">Data de Fabricação:</label>
        <input type="numeric" class="form-control" name="fabricacao" value="<?=$produto['fabricacao']?>">
  </div>
  <div class="form-group">
        <label for="validade">Validade:</label>
        <input type="numeric" class="form-control" name="validade" value="<?=$produto['validade']?>">
  </div>

  <div class="form-group">
    <tr>
      <td>Categoria</td>
      <td>
          <select name="categoria_id" class="form-control">
          <?php 

              foreach($categorias as $categoria) : 
                  $essa = $produto['categoria_id'] == $categoria['id'];
                  $selecao = $essa ? "selected='selected'" : "";

          ?>
              <option value="<?=$categoria['id']?>" <?=$selecao?>>
                      <?=$categoria['nome']?>
              </option>
          <?php endforeach ?>
          </select>
      </td>
    </tr>
  </div>
      <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-warning">alterar</button>
      </div>
</form>
</div>

<?php include("rodape.php");?>