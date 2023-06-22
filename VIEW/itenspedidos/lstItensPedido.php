<?php
    echo __DIR__; 
     
    include 'C:\xampp\htdocs\trabalhoAlmirphp2023\DAL\conexao.php';
    use DAL\Conexao;
    $sql = "select * from itens_pedido;";
    $con = Conexao::conectar(); 
    $lstitensPedido = $con->query($sql); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1CSS/tabelas.css">
    <title>Listar Itens Pedidos</title>
</head>
<body>
    <h1>Listar Itens Pedidos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ID DO PEDIDO</th>
            <th>ID DO PRODUTO</th>
            <th>QUANTIDADE</th>
        </tr>
        <?php 
            foreach ($lstitensPedido as $itensPedido){
        ?>
            <tr>
                <td><?php echo $itensPedido['ID']; ?></td>
                <td><?php echo $itensPedido['ID_PEDIDO']; ?></td>
                <td><?php echo $itensPedido['ID_PRODUTO']; ?></td>
                <td><?php echo $itensPedido['QUANTIDADE']; ?></td>
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>