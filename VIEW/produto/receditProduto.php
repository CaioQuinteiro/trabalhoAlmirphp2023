<?php

    include_once '../../MODEL/Produto.php';
    include_once '../../BLL/bllProduto.php';

    $produto = new \MODEL\Produto();

    $produto->setId($_POST['id']);
    $produto->setNome($_POST['nome']);
    $produto->setPreco($_POST['preco']);
    $produto->setQtde($_POST['qtde']);

    $bll = new \BLL\bllProduto();
    $bll->Update($produto);

    header("location: lstProdutos.php");
?>