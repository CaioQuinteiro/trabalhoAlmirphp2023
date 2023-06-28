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
    <link rel="stylesheet" href="..\..\VIEW\1CSS\inserir.css">
    <link rel="stylesheet" href="..\..\VIEW\1CSS\footer.css">
    <title>Editar Produto</title>
</head>
<body>

    <div>
        <header>
            <h1>Editar Produto</h1>
        </header>

        <main>
            <form action="receditProduto.php" method="POST">

                <div>
                    <label for="id">
                        ID: <?php echo $produto->getId(); ?>
                    </label>
                    <input type="hidden" name="id" value="<?php echo $produto->getId(); ?>">
                </div>

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $produto->getNome(); ?>" required>
                <br>
                
                <label for="endereco">Preço:</label>
                <input type="text" id="preco" name="preco" value="<?php echo $produto->getPreco(); ?>" required>
                <br>
                
                <label for="telefone">Quantidade:</label>
                <input type="text" id="qtde" name="qtde" value="<?php echo $produto->getQtde(); ?>" required>
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