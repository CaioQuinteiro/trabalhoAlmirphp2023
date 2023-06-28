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
    <link rel="stylesheet" href="..\..\VIEW\css\detalhes.css">
    <link rel="stylesheet" href="..\..\VIEW\css\footer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Detalhes do Pedido</title>
</head>
<body>
    
    <header>
        <h1>Detalhes do Pedido</h1>
    </header>

    <main>
        <div class="container">
            <label for="lblID">
                <h5>ID: <?php echo $pedido->getId(); ?></h5>
            </label>
            <input type="hidden" name="id" value="<?php echo $pedido->getId();?>">
            
            <label for="lblNome">
                <h5>CLIENTE: <?php echo $pedido->getIdCliente(); ?></h5>
            </label>
            <input type="hidden" name="nome" value="<?php echo $pedido->getIdCliente();?>">
            
            <label for="lblEndereco">
                <h5>PRODUTO: <?php echo $pedido->getIdProduto(); ?></h5>
            </label>
            <input type="hidden" name="endereco" value="<?php echo $pedido->getIdProduto();?>">

            <label for="lblTelefone">
                <h5>DATA: <?php echo $pedido->getData(); ?></h5>
            </label>
            <input type="hidden" name="telefone" value="<?php echo $pedido->getData();?>">
            <br>

            <div class="botoes">
                <button type="button" onclick="JavaScript:location.href='editarPedido.php?id=' + <?php echo $pedido->getId(); ?>">
                     <i class="material-icons">edit</i>
                </button>
                <button type="button" onclick="JavaScript:remover(<?php echo $pedido->getId(); ?>)">
                    <i class="material-icons">delete</i>
                </button>
                <button type="button" onclick="JavaScript:location.href='lstPedido.php'">
                    <i class="material-icons">arrow_back</i>
                </button>
            </div>

        </div>
    </main>

    <footer>
        <span>
            © Caio Quinteiro e Nilton Duarte, 2023 - Todos os direitos reservados
        </span>
    </footer>


</body>
</html>

<script>
    function remover(id) {
        if(confirm('Excluir o Pedido ' + id + '?')){
            location.href = 'remPedido.php?id=' + id;
        }
    }
</script>