<?php

    include_once '../../BLL/bllCliente.php';
    $id = $_GET['id'];

    $bll = new \BLL\bllCliente();
    $cliente = $bll->SelectID($id);

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
    <title>Editar Cliente</title>
</head>
<body>

    <div>
        <header>
            <h1>Editar Cliente</h1>
        </header>

        <main>
            <form action="receditCliente.php" method="POST">

                <div>
                    <label for="id">
                        ID: <?php echo $cliente->getId(); ?>
                    </label>
                    <input type="hidden" name="id" value="<?php echo $cliente->getId(); ?>">
                </div>

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $cliente->getNome(); ?>" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="2" maxlength="50">
                <br>
                
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" value="<?php echo $cliente->getEndereco(); ?>" required>
                <br>
                
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" value="<?php echo $cliente->getTelefone(); ?>" required pattern="[0-9]+$" required min="1" max="15">
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