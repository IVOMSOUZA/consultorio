<?php
  require_once('conexao.php');

	 $n_emp =    $_POST['n_emp'];
	 $nome_emp = $_POST['nome_emp'];
	 $cargo =    $_POST['cargo'];
	 $chefe =     $_POST['chefe'];
	 $data_adm =  $_POST['data_adm'];
	 $sal =       $_POST['sal'];
	 $com  =      $_POST['com'];
	 $n_dep  =    $_POST['n_dep'];
	              
	
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Cadastrar</title>
	  <meta charset="utf-8">
  </head>
  <body>
  	<?php
  		$sql = "INSERT INTO emp
  		        VALUES ( $n_emp
  		               , '$nome_emp
  		               , '$cargo
					   , '$chefe
					   , '$data_adm
					   , '$sal
					   , '$com
					   , '$n_dep
					   ')";

			$dbh->exec($sql);
  	?>
  </body>
</html>