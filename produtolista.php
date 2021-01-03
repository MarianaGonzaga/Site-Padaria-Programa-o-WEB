<?php include("cabecalho.php");
include("conecta.php");
include("bancoproduto.php");?>


<table class="table table-striped table-bordered"> 

	<?php
$produtos = listaprodutos($conexao);
foreach($produtos as $produto) {
?>
	<tr>	
		<td><?= $produto['id']?></td>
		<td><?= $produto['nome']?></td>
		<td><?= $produto['preco']?></td>
		<td><?= substr($produto['descricao'],0,40) ?></td>
		<td><a class="btn btn-primary" href="produto_altera_form.php?id=<?=$produto['id']?>">alterar</a></td>
		<td>
		<form action="removeProduto.php?id=<?=$produto['id']?>" method="post">
            <button class="btn btn-danger">remover</button>
		</form>
		</td>
	</tr>
<?php
	}
?>
</table>
<?php include("rodape.php");?>