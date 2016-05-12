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
          <th>Nome Empregado</th>
          <th>Cargo</th>
		  <th>Chefe</th>
		  <th>Data Admissão</th>
		  <th>Salário</th>
		  <th>Comissão</th>		  
          <th colspan="2">Ações</th>
        </tr> 
      </thead>
      <tbody>
        <?php
          foreach($dbh->query('SELECT * FROM emp') as $linha){
            echo '<tr>';
            echo "<td>{$linha['n_emp']}</td>";            
            echo "<td>{$linha['nome_emp']}</td>";
            echo "<td>{$linha['cargo']}</td>";  
			echo "<td>{$linha['chefe']}</td>";  
			echo "<td>{$linha['data_adm']}</td>";  
			echo "<td>{$linha['sal']}</td>";  
			echo "<td>{$linha['com']}</td>";  			
            echo "<td><a href=\"remover.php?n_dep={$linha['n_emp']}\">Remover</a></td>";
            echo "<td><a href=\"form_atualizar.php?n_dep={$linha['n_emp']}\">Atualizar</a></td>";
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
	<br /><br />
	<?php
	require_once('menuEmp.php');
	?>
  </body>
</html>