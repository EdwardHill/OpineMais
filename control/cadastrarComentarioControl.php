<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once ('../imports.php');

$id_produto = $_POST['id_produto'];
$id_opiniao = $_POST['id_opiniao'];
$mensagem = $_POST['mensagem'];

$opiniao = new Opiniao($id_opiniao); 

$serializado = $_SESSION['usuario'];
$usuario = unserialize($serializado);

$comentario = new Comentario($id_comentario, $mensagem, $usuario, $opiniao);

$fachada = Fachada::getInstance();
$fachada->adicionarComentario($comentario);

header('Location: ../detalharProduto.php?id_produto='.$id_produto);
