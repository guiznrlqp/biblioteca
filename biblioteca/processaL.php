<?php 
 
include_once 'conexao.php';

	$titulo  = isset($_POST['nome']) == true?$_POST['nome']:"";
	$tombo  = isset($_POST['tombo']) == true?$_POST['tombo']:"";


	//inserir dados no banco de dados.

	$sql = "INSERT INTO livros (titulo, tombo) VALUES ('$titulo', $tombo)";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrarL.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

?>