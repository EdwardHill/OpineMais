<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title>Editar Comentario - Opine Mais </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
       	<script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/screen.css">
        <script type="text/javascript" src="js/easySlider1.7.js"></script>
        <link rel="shortcut icon" href="css/images/short.png"/>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#slider").easySlider({
                    auto: true,
                    continuous: true
                });
            });
        </script>

        <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />

    </head>
    <body>
        <div class="main">
            <?php session_start(); ?>
            <?php include("header.php"); ?>
            <?php include_once('imports.php'); ?>

            <?php
            if (!empty($_SESSION['usuario'])) {
                $serializacao = $_SESSION['usuario'];
                $usuario = unserialize($serializacao);
            } else {
                header('Location: home.php');
            }
            $id_opiniao = $_GET['id_opiniao'];
            $opiniao = new Opiniao($id_opiniao);
            
            $fachada = Fachada::getInstance();
            $opiniao = $fachada->pesquisarOpiniao($opiniao);
            
            ?>

            <!-- titulo do conteudo-->
            <header  id="header">
                <h2>Editar Opinião</h2>
            </header>
            <br>
            <br>
            <br>
            <!-- Conteudo-->

            <p style="text-align: center; color: red;">
                <?php
                if (!empty($_GET['mensagem'])) {
                    echo $_GET['mensagem'];
                }
                ?>
            </p>
            <form method="POST" id="op" action="control/editarOpiniaoControl.php">
                <fieldset>

                    <legend>Opinião</legend>
                    <input type="hidden" name="id_opiniao" value="<?php echo $opiniao->getId_opiniao();?>">
                <?php
                    if($opiniao->getQualificacao() == Qualificacao::BOM){
                ?>
                    <p>
                        <img src="images/bom.png"  id="op" alt="bom" height="30" width="30"/><?php echo Qualificacao::BOM;?>
                        <input type="radio" name="qualificacao" checked value="<?php echo Qualificacao::BOM?>">
                        <img src="images/ruim.png"  id="op" alt="ruim" height="30" width="30"/><?php echo Qualificacao::RUIM;?>
                        <input type="radio" name="qualificacao" value="<?php echo Qualificacao::RUIM?>">
                    </p>
                <?php
                    }else if($opiniao->getQualificacao() == Qualificacao::RUIM){
                ?>
                    <p>
                        <img src="images/bom.png"  id="op" alt="bom" height="30" width="30"/><?php echo Qualificacao::BOM;?>
                        <input type="radio" name="qualificacao" value="<?php echo Qualificacao::BOM?>">
                        <img src="images/ruim.png"  id="op" alt="ruim" height="30" width="30"/><?php echo Qualificacao::RUIM;?>
                        <input type="radio" name="qualificacao" checked value="<?php echo Qualificacao::RUIM?>">
                    </p>
                <?php
                    }
                ?>
                    <br/><textarea
                        name="opiniao"  form="op" required id="op" ROWS=4 COLS=60><?php echo $opiniao->getMensagem()?></textarea>

                </fieldset>

                <ul class="actions3">
                    <li><input type="submit"  class="button3" value="Confirmar Edição" /></li>
                    <!-- <li><input type="reset" value="Limpar" /></li> -->
                </ul>

            </form>
        </div>
    </body></html>


