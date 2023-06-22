<?php
    echo __DIR__; 

use DAL\dalCliente;     
    include 'C:\xampp\htdocs\trabalhoAlmirphp2023\DAL\dalCliente.php';
    $dal = new \dal\dalCliente();
    $lstCliente = $dal->Select(); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabelas.css">
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ENDERECO</th>
            <th>TELEFONE</th>
        </tr>
        <?php 
            foreach ($lstCliente as $cliente){
        ?>
            <tr>
                <td><?php echo $cliente->getId(); ?></td>
                <td><?php echo $cliente->getNome(); ?></td>
                <td><?php echo $cliente->getEndereco(); ?></td>
                <td><?php echo $cliente->getTelefone(); ?></td>
            </tr>
        <?php 
            }
        ?>
    </table>
    
</body>
</html>