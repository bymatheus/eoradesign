<?php
    session_start();

    $v="1.0.3";

    //Logica que seta o ambiente
    require_once($h."assets/inc/logica-ambiente.php");

    //Conexao
    //require_once($h."assets/inc/conexao.php");

    //Lista de páginas
    require_once($h."assets/inc/paginas.php");

    //Lista de Cabeçalho
    require_once($h."assets/modules/cabecalho.php");

    //Lista de Cabeçalho
    require_once($h."assets/modules/menu.php");

    //Lista de projetos
    require_once($h."assets/inc/projetos.php");