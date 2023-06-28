<?php

    include_once '../../BLL/bllProduto.php';
    $id = $_GET['id'];

    $bll = new \BLL\bllProduto();
    $produto = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\..\VIEW\1CSS\detalhes.css">
    <link rel="stylesheet" href="..\..\VIEW\1CSS\footer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Detalhes do produto</title>
</head>
<body>
    
    <header>
        <h1>Detalhes do Produto</h1>
    </header>

    <main>
        <div class="container">
            <label for="lblID">
                <h5>ID: <?php echo $produto->getId(); ?></h5>
            </label>
            <input type="hidden" name="id" value="<?php echo $produto->getId();?>">
            
            <label for="lblNome">
                <h5>NOME: <?php echo $produto->getNome(); ?></h5>
            </label>
            <input type="hidden" name="nome" value="<?php echo $produto->getNome();?>">
            
            <label for="lblPreco">
                <h5>ENDEREÇO: <?php echo $produto->getPreco(); ?></h5>
            </label>
            <input type="hidden" name="preco" value="<?php echo $produto->getPreco();?>">

            <label for="lblQtde">
                <h5>TELEFONE: <?php echo $produto->getQtde(); ?></h5>
            </label>
            <input type="hidden" name="qtde" value="<?php echo $produto->getQtde();?>">
            <br>

            <div class="botoes">
                <button type="button" onclick="JavaScript:location.href='editarProduto.php?id=' + <?php echo $produto->getId(); ?>">
                     <i class="material-icons">edit</i>
                </button>
                <button type="button" onclick="JavaScript:remover(<?php echo $produto->getId(); ?>)">
                    <i class="material-icons">delete</i>
                </button>
                <button type="button" onclick="JavaScript:location.href='lstProdutos.php'">
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
        if(confirm('Excluir o Cliente ' + id + '?')){
            location.href = 'remCliente.php?id=' + id;
        }
    }
</script>