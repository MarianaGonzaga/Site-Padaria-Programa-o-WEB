<?php include("cabecalho.php");         
 include("conecta.php");            
 include("bancoproduto.php"); 
 
 $id = $_POST["id"];
 $nome = $_POST["nome"];
 $preco = $_POST["preco"];
 $fabricacao = $_POST["fabricacao"];
 $validade = $_POST["validade"];
 $descricao = $_POST["descricao"];
 $categoria_id = $_POST["categoria_id"];

 
$query = "update produto set nome = '{$nome}', preco = {$preco}, fabricacao = '{$fabricacao}', validade = '{$validade}', descricao = '{$descricao}', categoria_id = {$categoria_id} WHERE id = {$id}"; 
    if(mysqli_query($conexao, $query)) {
    ?> <p class="alert alert-success">Produto <?= $nome;?>, <?= $preco;?> alterado com sucesso!</p><?php
     }
    else { 
        $msg=mysqli_error($conexao);?><p class="alert alert-warning">Produto não alterado:
        <?=$msg?></p> 
    <?php } ?> 
      
      
<?php include("rodape.php");?>