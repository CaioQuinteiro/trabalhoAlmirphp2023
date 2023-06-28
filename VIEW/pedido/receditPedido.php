
<?php

    include_once '../../MODEL/pedido.php';
    include_once '../../BLL/bllPedido.php';

    $pedido = new \MODEL\Pedido();

    $pedido->setId($_POST['id']); 
    $pedido->setIdCliente($_POST['cli']);
    $pedido->setIdProduto($_POST['idprod']); 
    $pedido->setData($_POST['data']);

    $bll = new \BLL\bllPedido();
    $bll->Update($pedido);

    header("location: lstPedito.php");
?>