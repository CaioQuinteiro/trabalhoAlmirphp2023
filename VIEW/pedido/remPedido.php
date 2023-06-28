<?php

    include_once '../../MODEL/pedido.php';
    include_once '../../BLL/bllPedido.php';

    $id = $_GET['id'];

    $bll = new \BLL\bllPedido();
    $bll->Delete($id);

    header("location: lstPedido.php");
?>