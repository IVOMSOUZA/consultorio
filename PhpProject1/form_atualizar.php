<?php
  require_once('conexao.php');
  $n_dep = $_GET['n_dep'];
  $sql   = "SELECT * FROM dep WHERE n_dep = $n_dep";
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
    foreach($dbh->query($sql) as $linha):
    ?>
      <form action="atualizar.php" method="post">
        Número: <input type="number"
                       name="n_dep"
                       value="<?php echo $linha['n_dep']?>" 
                       readonly="readonly" />
        <br />
        Nome: <input type="text" 
                     name="nome_dep"
                     value="<?php echo $linha['nome_dep']?>" />
        <br />
        Local: <input type="text" 
                      name="local_dep"
                      value="<?php echo $linha['local_dep']?>" />
        <br />      
        <input type="submit" value="Alterar" />
      </form>
    <?php
    endforeach;
    ?>
  </body>
</html>