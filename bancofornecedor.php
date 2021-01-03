<?php
function listafornecedores($conexao) {
	$fornecedores = array();
	$resultado = mysqli_query($conexao, "select * from fornecedor");
	while($fornecedor = mysqli_fetch_assoc($resultado)) {
		array_push($fornecedores, $fornecedor);
}
	return $fornecedores;
}

function removeFornecedor($conexao, $id) {
	$query = "delete from fornecedor where id = {$id}";
	return mysqli_query($conexao, $query);
	}
function buscaFornecedor($conexao, $id) {
	$query = "select * from fornecedor where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

?>