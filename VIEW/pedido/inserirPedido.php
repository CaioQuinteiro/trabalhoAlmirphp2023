<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\..\VIEW\css\inserir.css">
    <link rel="stylesheet" href="..\..\VIEW\css\footer.css">
    <title>Inserir Pedido</title>
</head>
<body>

    <div>
        <header>
            <h1>Inserir Pedido</h1>
        </header>

        <main>
            <form action="recinsPedido.php" method="POST">
                <label for="cli" data-error="Preencha o campo">Id Cliente:</label>
                <input type="text" id="cli" name="cli" required pattern="[0-9]+$">
                <br>
                
                <label for="idprod">Id Produto:</label>
                <input type="text" id="idprod" name="idprod" required pattern="[0-9]+$">
                <br>
                
                <label for="data">Data:</label>
                <input type="tel" id="data" name="data" required >
                <br>

                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
                <button type="button" onclick="JavaScript:location.href='lstPedido.php'">Voltar</button>
            </form>
        </main>

        <footer>

        </footer>
    </div>   

    
    <footer>
        <span>
            © Caio Quinteiro e Nilton Duarte, 2023 - Todos os direitos reservados
        </span>
    </footer>
</body>
</html>