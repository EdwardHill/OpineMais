<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title>Perfil - Opine Mais </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
       	<script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/screen.css">
        <script type="text/javascript" src="js/easySlider1.7.js"></script>
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
        <?php session_start();?>
        <?php include("header.php"); ?>
       
        <?php include_once('imports.php'); ?>
            
        <?php
            if(!empty($_SESSION['usuario'])){
                $serializacao = $_SESSION['usuario'];
                $usuario = unserialize($serializacao);
            }else{
                header('Location: home.php');
            }
        ?>

       

            <!-- titulo do conteudo-->
            <header  id="header">
                <h2>Perfil</h2>
            </header>
            <br>
            <br>
            <br>
            <!-- Conteudo-->

            <fieldset>
                <legend>Dados de Login</legend>
                <p style="text-align: center; color: green;">
                    <?php 
                        if(!empty($_GET['mensagem'])){
                            echo $_GET['mensagem'];
                        }
                    ?>
                </p>
                <p>
                    <b>E-mail: </b><?php echo $usuario->getEmail();?>  <br/>
                </p>
            </fieldset>

            <fieldset>
                <legend>Dados Pessoais</legend>
                <p class="p"><b> Nome: </b><?php echo $usuario->getNome();?>  </p>
            </fieldset>
                    <br>
                    <br>
                    
                <ul class="actions">
                    <li><a href="editarPerfil.php" class="button">Editar Perfil</a></li>
                     <li><a href="editarSenha.php" class="button">Editar Senha</a></li>
                     <li><a href="control/excluirUsuarioControl.php" class="button">Desativar Perfil</a></li>
                </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
        <br><br><br><br><br>
            
        </div>
    </body></html>
         

