<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\..\VIEW\1CSS\inserir.css">
    <title>Inserir Produto</title>
</head>
<body>

    <div>
        <header>
            <h1>Inserir Produto</h1>
        </header>

        <main>
            <form action="recinsProduto.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <br>
                
                <label for="preço">Preço:</label>
                <input type="text" id="preco" name="preco" required>
                <br>
                
                <label for="qtde">Quantidade:</label>
                <input type="text" id="qtde" name="qtde" required>
                <br>

                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
                <button type="button" onclick="JavaScript:location.href='lstProduto.php'">Voltar</button>
            </form>
        </main>

        <footer>

        </footer>
    </div>   

    
    
</body>
</html>