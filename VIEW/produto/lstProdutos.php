<?php
     
    include '..\..\DAL\conexao.php';
    use DAL\Conexao;
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
    <link rel="stylesheet" href="..\..\VIEW\1CSS\tabelas.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <title>Listar Produtos</title>
</head>
<body>
    <h1>Listar Produtos</h1>
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