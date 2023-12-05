<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from livros");

	while ($dados = $consultar->fetch_assoc()) {


		$id 	  = $dados['id'];
		$tombo 	  = $dados['tombo'];	
		$titulo 	  = $dados['titulo'];



		echo "<tr>";
			echo "<td>$id<td>$tombo<td>$titulo";
			echo "<td><a href='form_editarL.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='deleteL.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}

?>