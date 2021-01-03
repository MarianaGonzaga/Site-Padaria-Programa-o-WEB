<?php include("cabecalho.php");
include("bancoproduto.php");
include("conecta.php");
?>
<div class="produtos">
    <?php
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $fabricacao = $_POST["fabricacao"];
    $validade = $_POST["validade"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];
    
    if(insereProduto($conexao, $nome, $preco, $fabricacao, $validade, $descricao,  $categoria_id)) {?>
    <p class="alert alert-success">Produto <?=$nome;?>, <?= $preco?> adicionado com sucesso!</p>
    <ul>
        <li>Nome: <?= $nome;?></li>
        <li>Preço: <?= $preco;?></li>
        <li>Fabricado em: <?= $fabricacao;?></li>
        <li> Valido até: <?= $validade;?></li>
    </ul>
    <?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="alert alert-warning">Produto não adicionado: <?=$msg?></p>
    <?php
}
?>  
</div>

<?php include("rodape.php");?>

