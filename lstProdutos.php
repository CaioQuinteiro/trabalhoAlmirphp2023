<?php
    include 'DAL\conexao.php';
    $sql = "select * from produto;";
    $con = Conexao::conectar(); 
    $lstProduto = $con->query($sql); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/tabelas.css">
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PRECO</th>
            <th>QUANTIDADE</th>
        </tr>
        <?php 
            foreach ($lstProduto as $produto){
        ?>
            <tr>
                <td><?php echo $produto['ID']; ?></td>
                <td><?php echo $produto['NOME']; ?></td>
                <td><?php echo $produto['PRECO']; ?></td>
                <td><?php echo $produto['QTDE']; ?></td>
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>