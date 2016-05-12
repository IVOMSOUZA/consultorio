<?php
  require_once('conexao.php');

	$n_dep     = $_POST['n_dep'];
	$nome_dep  = $_POST['nome_dep'];
	$local_dep = $_POST['local_dep'];
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Cadastrar</title>
	  <meta charset="utf-8">
  </head>
  <body>
  	<?php
  		$sql = "INSERT INTO dep 
  		        VALUES ( $n_dep
  		               , '$nome_dep'
  		               , '$local_dep')";

			$dbh->exec($sql);
  	?>
  </body>
</html>