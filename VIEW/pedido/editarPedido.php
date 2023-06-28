<?php

    include_once '../../BLL/bllPedido.php';
    $id = $_GET['id'];

    $bll = new \BLL\bllPedido();
    $pedido = $bll->SelectID($id);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\..\VIEW\css\inserir.css">
    <link rel="stylesheet" href="..\..\VIEW\css\footer.css">
    <title>Editar Pedido</title>
</head>
<body>

    <div>
        <header>
            <h1>Editar Pedido</h1>
        </header>

        <main>
            <form action="receditPedido.php" method="POST">

                <div>
                    <label for="id">
                        ID: <?php echo $pedido->getId(); ?>
                    </label>
                    <input type="hidden" name="id" value="<?php echo $pedido->getId(); ?>">
                </div>

                <label for="cli">Cliente:</label>
                <input type="text" id="cli" name="cli" value="<?php echo $pedido->getIdCliente(); ?>" required >
                <br>
                
                <label for="idprod">Produto:</label>
                <input type="text" id="idprod" name="idprod" value="<?php echo $pedido->getIdProduto(); ?>" required>
                <br>
                
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" value="<?php echo $pedido->getData(); ?>" required>
                <br>

                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
            </form>
        </main>

    </div>   

    
        <footer>
        <span>
            © Caio Quinteiro e Nilton Duarte, 2023 - Todos os direitos reservados
        </span>
    </footer>
</body>
</html>