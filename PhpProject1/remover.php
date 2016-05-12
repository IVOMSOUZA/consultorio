<?php
	require_once('conexao.php');
	$n_dep = $_GET['n_dep'];
	$sql   = "DELETE FROM dep WHERE n_dep = $n_dep";
	$total = $dbh->exec($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remover</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		echo "Total de depertamentos removidos foi $total";
	?>
</body>
</html>