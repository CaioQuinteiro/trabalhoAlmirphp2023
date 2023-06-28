<?php
    include_once 'C:\xampp\htdocs\trabalhoAlmirphp2023\BLL\bllUsuario.php';
    include_once 'C:\xampp\htdocs\trabalhoAlmirphp2023\MODEL\Usuario.php';

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);
    
    $bll = new  \BLL\bllUsuario();
    
    $objUsuario = new \MODEL\Usuario();
    
    $objUsuario = $bll->SelectUser($usuario);
    
    if ($objUsuario != null) {
        if (md5($senha) == $objUsuario->getSenha()){
            session_start();
            $_SESSION['login'] =  $objUsuario->getUsuario() ;
            header("location:menu.php");
        }
        else header("location:index.php");
    }
    else echo "usuario não encontrado";
    
?>