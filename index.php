<?php

include 'conexao.php';

$sql = "SELECT id, nome, qtdTitulos FROM time ORDER BY qtdTitulos DESC";
$consulta = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Times Brasileiros</title>
</head>
<body>
    
    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Títulos</th>
            <th>Ações</th>
       </tr>
       
       <?php

        while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
       ?>
       <tr>
          <td><?php echo $linha->id ?></td>
          <td><?php echo $linha->nome ?></td>
          <td><?php echo $linha->qtdTitulos ?></td>
          <td><a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a></td>
        </tr>
        <?php
        }
        ?>
    </table>    
     
</body>
</html>