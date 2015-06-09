<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title>Editar Comentário - Opine Mais </title>
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
            $id_comentario = $_GET['id_comentario'];
            $id_produto = $_GET['id_produto'];
            $comentario = new Comentario($id_comentario);
            
            $fachada = Fachada::getInstance();
            $comentario = $fachada->pesquisarComentario($comentario);
            ?>

            <!-- titulo do conteudo-->
            <header  id="header">
                <h2>Editar Comentário</h2>
            </header>
            <br>
            <br>
            <br>
            <!-- Conteudo-->

            <p style="text-align: center; color: green;">
                <?php
                if (!empty($_GET['mensagem'])) {
                    echo $_GET['mensagem'];
                }
                ?>
            </p>
            <form method="POST" id="comen" action="control/editarComentarioControl.php">
                <fieldset>
                    <input type="hidden" name="id_produto" value="<?php echo $id_produto?>">
                    <input type="hidden" name="id_comentario" value="<?php echo $id_comentario?>">
                    <legend>Comentário</legend>
                    <br/><textarea
                        name="comentario"  required form="comen" id="comentario" ROWS=4 COLS=60 placeholder="editar o comentario..."><?php echo $comentario->getMensagem()?></textarea>

                </fieldset>



                <ul class="actions3">
                    <li><input type="submit"  class="button3" value="Confirmar Edição" /></li>
                    <!-- <li><input type="reset" value="Limpar" /></li> -->
                </ul>

            </form>
        </div>
    </body></html>


