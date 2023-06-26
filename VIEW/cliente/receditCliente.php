<?php

    include_once '../../MODEL/cliente.php';
    include_once '../../BLL/bllCliente.php';

    $cliente = new \MODEL\Cliente();

    $cliente->setId($_POST['id']);
    $cliente->setNome($_POST['nome']);
    $cliente->setEndereco($_POST['endereco']);
    $cliente->setTelefone($_POST['telefone']);

    $bll = new \BLL\bllCliente();
    $bll->Update($cliente);

    header("location: lstCliente.php");
?>