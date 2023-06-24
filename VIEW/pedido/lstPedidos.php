<?php
     
    include '..\..\DAL\conexao.php';
    use DAL\Conexao;
    $sql = "select * from pedidos;";
    $con = Conexao::conectar(); 
    $lstPedido = $con->query($sql); 
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
    <title>Listar Pedidos</title>
</head>
<body>
    <h1>Listar Pedidos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ID DO CLIENTE</th>
            <th>DATA DO PEDIDO</th>
        </tr>
        <?php 
            foreach ($lstPedido as $pedido){
        ?>
            <tr>
                <td><?php echo $pedido['ID']; ?></td>
                <td><?php echo $pedido['ID_CLIENTE']; ?></td>
                <td><?php echo $pedido['DATA_PEDIDO']; ?></td>
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>