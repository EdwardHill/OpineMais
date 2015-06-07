<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once ('../imports.php');

$id_produto = $_POST['id_produto'];
$qualificacao = $_POST['qualificacao'];
$mensagem = $_POST['mensagem'];

$produto = new Produto($id_produto);

$serializado = $_SESSION['usuario'];
$usuario = unserialize($serializado);

$opiniao = new Opiniao($id_opiniao, $mensagem, $qualificacao, 0.0, $usuario, $produto);

$fachada = Fachada::getInstance();
$fachada->adicionarOpiniao($opiniao);

header('Location: ../detalharProduto.php?id_produto='.$id_produto);