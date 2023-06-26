<?php

    include_once '../../MODEL/cliente.php';
    include_once '../../BLL/bllCliente.php';

    $cliente = new \MODEL\Cliente();

    $cliente->setNome($_POST['nome']);
    $cliente->setEndereco($_POST['endereco']);
    $cliente->setTelefone($_POST['telefone']);

    $bll = new \BLL\bllCliente();
    $bll->Insert($cliente);

    header("location: lstCliente.php");
?>