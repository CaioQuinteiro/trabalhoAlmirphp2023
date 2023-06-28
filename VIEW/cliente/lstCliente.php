<?php
    namespace BLL;

use BLL\bllCliente;     
    include_once '..\..\BLL\bllCliente.php';
    $bll = new \bll\bllCliente();
    $lstCliente = $bll->Select(); 
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
    <title>Listar Clientes</title>
</head>
<body>
    <a onclick="JavaScript:location.href='../../VIEW/menu/menu.php'">
        <i class="material-icons">arrow_back</i>
    </a>    
    
    <h1>Listar Clientes</h1>        
    
    <a onclick="JavaScript:location.href='inserirCliente.php'">
        <i class="material-icons" id="ADD">add</i>
    </a>

    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ENDERECO</th>
            <th>TELEFONE</th>
            <th> </th>
        </tr>
        <?php 
            foreach ($lstCliente as $cliente){
        ?>
            <tr>
                <td class="td"><?php echo $cliente->getId(); ?></td>
                <td class="td"><?php echo $cliente->getNome(); ?></td>
                <td class="td"><?php echo $cliente->getEndereco(); ?></td>
                <td class="td"><?php echo $cliente->getTelefone(); ?></td>
                <td > 
                    <a onclick="JavaScript:location.href='detCliente.php?id=' + <?php echo $cliente->getId(); ?>">
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