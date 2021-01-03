<?php include("cabecalho.php");
include("conecta.php");
include("bancofornecedor.php");?>


<table class="table table-striped table-bordered"> 

	<?php
$fornecedores = listafornecedores($conexao);
foreach($fornecedores as $fornecedor) {
?>
	<tr>
        <td><?= $fornecedor['id']?></td>
		<td><?= $fornecedor['nome']?></td>
		<td><?= $fornecedor['empresa']?></td>
		<td><?= $fornecedor['tipo_produto']?></td>
		<td><a class="btn btn-primary" href="fornecedor_altera_form.php?id=<?=$fornecedor['id']?>">alterar</a></td>
		<td>
		<form action="removefornecedor.php?id=<?=$fornecedor['id']?>" method="post">
            <button class="btn btn-danger">remover</button>
		</form>
		</td>
	</tr>
<?php
	}
?>
</table>
<?php include("rodape.php");?>