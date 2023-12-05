

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php 
		include_once 'alterarL.php';
		include_once 'conexao.php';

		$id = $_GET['id'];
		echo($tombo);
	
		$consultar = $conn->query("select * from livros where id='$id'");

		while($dados  = $consultar->fetch_assoc()){
			  $titulo = $dados['titulo'];
			  $tombo  = $dados['tombo'];
		}
	?>

	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading text-center display-4">ALTERAR DADOS</div>

    				<form action="alterarL.php?id=<?php echo $id;?>"
    						 method="post" accept-charset="utf-8" class="form-group">

    					<label for="tombo">Título:</label>
    					<input type="text" name="titulo" value="<?php echo $titulo;?>" class="form-control">
    						
    					<label for="data">Tombo:</label>
    					<input type="text" name="tombo" value="<?php echo $tombo;?>" class="form-control">

    					<br>
    					<input type="submit" name="btn" value="Alterar" class="btn btn-success">
    					<a href="mostrarL.php" class="btn red">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>