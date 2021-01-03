<?php include("cabecalho.php");
include("conecta.php");
include("bancofornecedor.php");

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $empresa = $_POST["empresa"];
    $tipo_produto = $_POST["tipo_produto"];

    $query = "update fornecedor set nome = '{$nome}', cpf = '{$cpf}', empresa = '{$empresa}', tipo_produto = '{$tipo_produto}' 
              WHERE id = '{$id}'"; 
      
        if(mysqli_query($conexao, $query)) {
        ?> <p class="alert alert-success">Fornecedor <?= $nome;?> alterado com sucesso!</p><?php
        }
        else { 
            $msg=mysqli_error($conexao);?><p class="alert alert-warning">Fornecedor não alterado:
            <?=$msg?></p> 
        
        <?php } ?> 

<?php include("rodape.php");?>