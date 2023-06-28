<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\VIEW\1CSS\menu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Menu</title>
</head>
<body>

    <div class="header">
        <h1>Controle de Produtos e Clientes</h1>
    </div>



    <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="../../VIEW/menu/sobreProjeto.html" class="navigation__link">Sobre o Projeto</a></li>
                    <li class="navigation__item"><a href="../../VIEW/cliente/lstCliente.php" class="navigation__link">Clientes</a></li>
                    <li class="navigation__item"><a href="../../VIEW/produto/lstProdutos.php" class="navigation__link">Produtos</a></li>
                    </ul>
            </nav>
    </div>

</body>
</html>