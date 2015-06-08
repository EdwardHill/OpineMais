<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('../imports.php');

$id_produto = $_GET['id_produto'];
$id_comentario = $_GET['id_comentario'];

$comentario = new Comentario($id_comentario);

$fachada = Fachada::getInstance();
$fachada->removerComentario($comentario);

header('Location: detalharProduto.php?id_produto='.$id_produto);