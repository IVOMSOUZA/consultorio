<?php
  require_once('conexao.php');
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Listar</title>
	  <meta charset="utf-8">
    <style>
      table, td, th{
        border: 1px solid black;
      }
      table{
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
    <?php
      require_once('menu.php');
    ?>
    <table>
      <thead>
        <tr>
          <th>Número</th>
          <th>Nome</th>
          <th>Local</th>
          <th colspan="2">Ações</th>
        </tr> 
      </thead>
      <tbody>
        <?php
          foreach($dbh->query('SELECT * FROM dep') as $linha){
            echo '<tr>';
            echo "<td>{$linha['n_dep']}</td>";            
            echo "<td>{$linha['nome_dep']}</td>";
            echo "<td>{$linha['local_dep']}</td>";  
            echo "<td><a href=\"remover.php?n_dep={$linha['n_dep']}\">Remover</a></td>";
            echo "<td><a href=\"form_atualizar.php?n_dep={$linha['n_dep']}\">Atualizar</a></td>";
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
	<br /><br />
	Tabela Emp <br /><br />
	<?php
	require_once('menuEmp.php');
	require_once('ListarEmp.php');
	
	?>
  </body>
</html>