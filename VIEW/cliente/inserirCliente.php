<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\..\VIEW\css\inserir.css">
    <link rel="stylesheet" href="..\..\VIEW\css\footer.css">
    <title>Inserir Cliente</title>
</head>
<body>

    <div>
        <header>
            <h1>Inserir Cliente</h1>
        </header>

        <main>
            <form action="recinsCliente.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="2" maxlength="50">
                <br>
                
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
                <br>
                
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required pattern="[0-9]+$" required min="1" max="15">
                <br>

                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
                <button type="button" onclick="JavaScript:location.href='lstCliente.php'">Voltar</button>
            </form>
        </main>
    </div>   

</body>
</html>