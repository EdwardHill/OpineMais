<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once ('../imports.php');

$id_comentario = $_POST['id_comentario'];
$id_produto = $_POST['id_produto'];
$mensagem = $_POST['comentario'];

$comentario = new Comentario($id_comentario);

$fachada = Fachada::getInstance();
$comentario = $fachada->pesquisarComentario($comentario);

$comentario->setMensagem($mensagem);
$fachada->editarComentario($comentario);

header('Location: ../detalharProduto.php?id_produto='.$id_produto);

