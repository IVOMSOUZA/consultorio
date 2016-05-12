<?php
  require_once('conexao.php');
  $n_dep     = $_POST['n_dep'];
  $nome_dep  = $_POST['nome_dep'];
  $local_dep = $_POST['local_dep'];
  $sql = "UPDATE dep 
          SET nome_dep  = '$nome_dep'
            , local_dep = '$local_dep'
          WHERE n_dep = $n_dep";
  $total = $dbh->exec($sql);
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Listar</title>
	  <meta charset="utf-8">
  </head>
  <body>
    <?php
      require_once('menu.php');
      echo "Total Atualizado: $total";
    ?>
  </body>
</html>
