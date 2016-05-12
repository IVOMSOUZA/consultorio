<?php
require_once('conexao.php');

$id_medico = $_POST['id_medico'];
$nome = $_POST['nome'];
$crm = $_POST['crm'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $sql = "INSERT INTO medico
  		        VALUES ( $id_medico
  		               , '$nome'                                  
  		               , '$crm')";

        $dbh->exec($sql);
        ?>
    </body>
</html>

