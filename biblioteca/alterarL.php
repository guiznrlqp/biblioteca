<?php 
	
	include_once 'form_editarL.php';
	include_once 'conexao.php';

	$id = $_GET['id'];
	$titulo  = isset($_POST['titulo'])?$_POST['titulo']:"";
	$tombo  = isset($_POST['tombo'])?$_POST['tombo']:"";



	$alterar = $conn->query("update livros set titulo = '$titulo' where id = '$id'");
	
	if(mysqli_affected_rows($conn) > 0){
		header("location: mostrarL.php");
	}
	
?>