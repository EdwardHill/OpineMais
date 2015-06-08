<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('../imports.php');

$id_produto = $_GET['id_produto'];

$produto = new Produto($id_produto);

$fachada = Fachada::getInstance();
$fachada->removerProduto($produto);

header('Location: ../home.php');
