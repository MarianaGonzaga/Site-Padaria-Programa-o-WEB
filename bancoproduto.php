<?php
function listaprodutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produto");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
}
	return $produtos;
}

function removeproduto($conexao, $id) {
	$query = "delete from produto where id = {$id}";
	return mysqli_query($conexao, $query);
	}

	function insereProduto($conexao, $nome, $preco,  $fabricacao, $validade, $descricao, $categoria_id) {
		$query = $query = "insert into produto(nome, preco, fabricacao, validade, descricao, categoria_id)
		values ('{$nome}', {$preco}, '{$fabricacao}', '{$validade}', '{$descricao}', {$categoria_id})";
		$resultadoDaInsercao = mysqli_query($conexao, $query);
		return $resultadoDaInsercao;
	}
	function buscaProduto($conexao, $id) {
		$query = "select * from produto where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}
?>