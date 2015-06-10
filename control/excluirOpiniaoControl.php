<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('../imports.php');

$id_opiniao = $_GET['id_opiniao'];

$opiniao = new Opiniao($id_opiniao);

$fachada = Fachada::getInstance();
$opiniao = $fachada->pesquisarOpiniao($opiniao);
$fachada->removerOpiniao($opiniao);

header('Location: ../detalharProduto.php?id_produto='.$opiniao->getProduto()->getId_produto());
