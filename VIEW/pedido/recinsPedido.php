<?php

    include_once '../../MODEL/pedido.php';
    include_once '../../BLL/bllPedido.php';

    $pedido = new \MODEL\Pedido();

    $pedido->setIdCliente($_POST['cli']);
    $pedido->setIdProduto($_POST['idprod']); 
    $pedido->setData($_POST['data']);

    $bll = new \BLL\bllPedido();
    $bll->Insert($pedido);

    header("location: lstPedido.php");
?>