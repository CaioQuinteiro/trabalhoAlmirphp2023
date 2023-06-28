<?php
    namespace BLL;

use BLL\bllPedido;     
    include_once '..\..\BLL\bllPedido.php';
    $bll = new \bll\bllPedido();
    $lstPedido = $bll->Select(); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\VIEW\css\tabelas.css">
    <link rel="stylesheet" href="..\..\VIEW\css\footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Listar Pedidos</title>
</head>
<body>
    <a onclick="JavaScript:location.href='../../VIEW/menu.php'">
        <i class="material-icons">arrow_back</i>
    </a>    

    </a>
    
    <h1>Listar Pedidos</h1> 

    <a onclick="JavaScript:location.href='inserirPedido.php'">
        <i class="material-icons" id="ADD">add</i>
    </a>
    <table>
        <tr>
            <th>ID</th>
            <th>CLIENTE</th>
            <th>PRODUTO</th>
            <th>DATA</th>
            <th> </th>
        </tr>
        <?php 
            foreach ($lstPedido as $pedido){
        ?>
            <tr>
                <td class="td"><?php echo $pedido->getId(); ?></td>
                <td class="td"><?php echo $pedido->getIdCliente(); ?></td>
                <td class="td"><?php echo $pedido->getIdProduto(); ?></td>
                <td class="td"><?php echo $pedido->getData(); ?></td>
                <td > 
                    <a onclick="JavaScript:location.href='detPedido.php?id=' + <?php echo $pedido->getId(); ?>">
                        <i class="material-icons">dehaze</i>  
                    </a>
                </td>
            </tr>
        <?php 
            }
        ?>
    </table>
    <footer>
        <span>
            © Caio Quinteiro e Nilton Duarte, 2023 - Todos os direitos reservados
        </span>
    </footer>
</body>
</html>