<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once('../imports.php');

$serializado = $_SESSION['usuario'];
$usuario = unserialize($serializado);

$fachada = Fachada::getInstance();
$fachada->removerUsuario($usuario);

unset($_SESSION['usuario']);

header('Location: home.php');