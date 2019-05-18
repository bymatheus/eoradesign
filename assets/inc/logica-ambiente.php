<?php
    //Cria uma sessão de ambiente para validações futuras no sistema
    if(empty($_SESSION['ambiente']) AND $_SERVER['HTTP_HOST'] == "eoradesign.com.br" OR $_SERVER['HTTP_HOST'] == "www.eoradesign.com.br"){
        $_SESSION['ambidente']="Produção";
    }else{
        $_SESSION['ambidente']="Sandbox";
    }

    //Validações se a sessão for de produção
    if($_SESSION['ambidente']=="Produção"){
        error_reporting(0);
    }