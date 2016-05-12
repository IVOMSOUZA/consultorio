<?php
require_once('conexao.php');

$id_cliente = $_POST['id_cliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
$sexo = $_POST['sexo'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $sql = "INSERT INTO paciente 
  		        VALUES ( $id_cliente
  		               , '$nome'
                               , '$cpf'
                               , '$dataNascimento'    
  		               , '$sexo')";

        $dbh->exec($sql);
        ?>
    </body>
</html>

