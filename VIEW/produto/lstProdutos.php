<?php
    namespace BLL;

use BLL\bllProduto;     
    include_once '..\..\BLL\bllProduto.php';
    $bll = new \bll\bllProduto();
    $lstProduto = $bll->Select(); 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Listar Produtos</title>
</head>
<body>
    <a onclick="JavaScript:location.href='../../VIEW/menu/menu.php'">
        <i class="material-icons">arrow_back</i>
    </a>  
    <h1>Listar Produtos</h1>
    
    <a class="btn-floating btn-large waves-effect waves-light red" onclick="JavaScript:location.href='InserirProduto.php'">
        <i class="material-icons" id="ADD">add</i>
    </a>

    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>QUANTIDADE</th>
            <th> </th>
        </tr>
        <?php 
            foreach ($lstProduto as $produto){
        ?>
            <tr>
                <td class="td"><?php echo $produto->getId(); ?></td>
                <td class="td"><?php echo $produto->getNome(); ?></td>
                <td class="td"><?php echo $produto->getPreco(); ?></td>
                <td class="td"><?php echo $produto->getQtde(); ?></td>
                <td > 
                    <a onclick="JavaScript:location.href='detProduto.php?id=' + <?php echo $produto->getId(); ?>">
                        <i class="material-icons">dehaze</i>  
                    </a>
                </td>
            </tr>
        <?php 
            }
        ?>
    </table>
    
</body>
</html>