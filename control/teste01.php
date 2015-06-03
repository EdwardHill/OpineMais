<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include_once '../model/dados/repositorios/RepositorioUsuario.php';
include('../model/dados/repositorios/RepositorioUsuario.php');
include('../model/entidades/Usuario.php');
    //$fachada = new Fachada();
    //$fachada = Fachada::getInstance();
    //$fachada->
    $repositorio = new RepositorioUsuario();
    $usuario = new Usuario(1, 'Teste01', "eeee@eeee", "123");
    $repositorio->adicionarUsuario($usuario);
    echo 'testando singleton'; 
    //echo var_dump($repositorio);
?>

