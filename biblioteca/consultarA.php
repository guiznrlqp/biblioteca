<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from alugados");

	while ($dados = $consultar->fetch_assoc()) {

		$tombo     = $dados['id_aluga'];
		$aluno   = $dados['id_user'];
		$livro   = $dados['nome_user'];
		$serie  = $dados['id_livro'];
		$devolucao  = $dados['devolucao'];


		echo "<tr>";
			echo "<td>$aluno<td>$serie<td>$livro<td>$devolucao<td>$tombo<td>";
			echo "<td><a href='form_editarA.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='deleteA.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}
?>