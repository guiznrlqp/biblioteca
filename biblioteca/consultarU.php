<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from alunos");

	while ($dados = $consultar->fetch_assoc()) {

		$id      = $dados['id_user'];
		$nome    = $dados['nome'];
		$email   = $dados['email'];
		$cell    = $dados['cell'];
		$rua     = $dados['rua'];
		
	


		echo "<tr>";
			echo "<td>$nome<td>$email<td>$cell<td>$rua<td>$numero<td>$bairo<td>$cidade<td>$uf<td>$cpf";
			echo "<td><a href='form_editarU.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='deleteU.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}

?>