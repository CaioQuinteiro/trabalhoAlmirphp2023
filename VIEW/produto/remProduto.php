<?php

    include_once 'C:\xampp\htdocs\trabalhoAlmirphp2023\MODEL\Produto.php';
    include_once 'C:\xampp\htdocs\trabalhoAlmirphp2023\BLL\bllProduto.php';

    $id = $_GET['id'];

    $bll = new \BLL\bllProduto();
    $bll->Delete($id);

    header("location: lstProdutos.php");
?>