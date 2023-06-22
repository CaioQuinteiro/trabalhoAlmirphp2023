<?php
     
    include '..\..\DAL\conexao.php';
    use DAL\Conexao;
    $sql = "select * from cliente;";
    $con = Conexao::conectar(); 
    $lstCliente = $con->query($sql); 
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

    <div class="container">
        <h1>Listar Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>ENDERECO</th>
                    <th>TELEFONE</th>
                </tr>
            </thead>
            <?php 
                foreach ($lstCliente as $cliente){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $cliente['ID']; ?></td>
                    <td><?php echo $cliente['NOME']; ?></td>
                    <td><?php echo $cliente['ENDERECO']; ?></td>
                    <td><?php echo $cliente['TELEFONE']; ?></td>
                </tr>
            </tbody>
            <?php 
                }
            ?>
        </table>
    </div>
    
</body>
</html>