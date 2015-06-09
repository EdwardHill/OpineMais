<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once ('../imports.php');

$id_opiniao = $_POST['id_opiniao'];
$qualificacao = $_POST['qualificacao'];
$mensagem = $_POST['opiniao'];

$opiniao = new Opiniao($id_opiniao);

$fachada = Fachada::getInstance();
$opiniao = $fachada->pesquisarOpiniao($opiniao);

$opiniao->setQualificacao($qualificacao);
$opiniao->setMensagem($mensagem);

$fachada->editarOpiniao($opiniao);

header('Location: ../detalharProduto.php?id_produto='.$opiniao->getProduto()->getId_produto());

