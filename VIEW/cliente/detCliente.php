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
    <link rel="stylesheet" href="..\..\VIEW\1CSS\detalhes.css">
    <link rel="stylesheet" href="..\..\VIEW\1CSS\footer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Detalhes do Cliente</title>
</head>
<body>
    
    <header>
        <h1>Detalhes do Cliente</h1>
    </header>

    <main>
        <div class="container">
            <label for="lblID">
                <h5>ID: <?php echo $cliente->getId(); ?></h5>
            </label>
            <input type="hidden" name="id" value="<?php echo $cliente->getId();?>">
            
            <label for="lblNome">
                <h5>NOME: <?php echo $cliente->getNome(); ?></h5>
            </label>
            <input type="hidden" name="nome" value="<?php echo $cliente->getNome();?>">
            
            <label for="lblEndereco">
                <h5>ENDEREÇO: <?php echo $cliente->getEndereco(); ?></h5>
            </label>
            <input type="hidden" name="endereco" value="<?php echo $cliente->getEndereco();?>">

            <label for="lblTelefone">
                <h5>TELEFONE: <?php echo $cliente->getTelefone(); ?></h5>
            </label>
            <input type="hidden" name="telefone" value="<?php echo $cliente->getTelefone();?>">
            <br>

            <div class="botoes">
                <button type="button" onclick="JavaScript:location.href='editarCliente.php?id=' + <?php echo $cliente->getId(); ?>">
                     <i class="material-icons">edit</i>
                </button>
                <button type="button" onclick="JavaScript:remover(<?php echo $cliente->getId(); ?>)">
                    <i class="material-icons">delete</i>
                </button>
                <button type="button" onclick="JavaScript:location.href='lstCliente.php'">
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