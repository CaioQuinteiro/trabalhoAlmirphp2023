<?php

    include_once '../../MODEL/produto.php';
    include_once '../../BLL/bllProduto.php';

    $produto = new \MODEL\Produto();

    $produto->setNome($_POST['nome']);
    $produto->setPreco($_POST['preco']);
    $produto->setQtde($_POST['qtde']);

    $bll = new \BLL\bllProduto();
    $bll->Insert($produto);

    header("location: lstProdutos.php");
?>