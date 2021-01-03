<?php include("cabecalho.php");
include("conecta.php");
?>
<div class="fornecedor">
    <?php
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $empresa = $_POST["empresa"];
    $tipo_produto = $_POST["tipo_produto"];
    $query = "insert into fornecedor(nome, cpf, empresa, tipo_produto)
    values ('{$nome}', '{$cpf}', '{$empresa}', '{$tipo_produto}')";
    if(mysqli_query($conexao, $query)) {?>
    <p class="alert alert-success">Fornecedor <?=$nome;?> Cadasrtrado com sucesso!</p>
    <?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="alert alert-warning">Fornecedor não adicionado: <?=$msg?></p>
    <?php
}
?>
    <ul>
        <li>Nome: <?= $nome;?></li>
        <li>CPF: <?= $cpf;?></li>
        <li>empresa: <?= $empresa;?></li>
        <li>Tipo de Produto: <?= $tipo_produto;?></li>
    </ul>
</div>

<?php include("rodape.php");?>

