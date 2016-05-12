<?php
require_once('conexao.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Listar Paciente</title>
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
        // <?php
        //  require_once('index.php');
        //  
        ?>
        <table>
            <thead>
                <tr>
                    <th>id_paciente</th>
                    <th>Nome </th>
                    <th>cpf</th>
                    <th>data nascimento</th>
                    <th>sexo/th>

<!-- <th colspan="2">Ações</th>-->
                </tr> 
            </thead>
            <tbody>
                <?php
                foreach ($dbh->query('SELECT * FROM paciente') as $linha) {
                    echo '<tr>';
                    echo "<td>{$linha['id_paciente']}</td>";
                    echo "<td>{$linha['nome']}</td>";
                    echo "<td>{$linha['cpf']}</td>";
                    echo "<td>{$linha['data_nascimento']}</td>";
                    echo "<td>{$linha['sexo']}</td>";

                    // echo "<td><a href=\"remover.php?n_dep={$linha['n_emp']}\">Remover</a></td>";
                    //  echo "<td><a href=\"form_atualizar.php?n_dep={$linha['n_emp']}\">Atualizar</a></td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <br /><br />
        //<?php
        //require_once('index.php');
        //require_once('ListarPaciente.php');
        //?>
    </body>
</html>

