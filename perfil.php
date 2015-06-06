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
        
        <?php include("header.php"); ?>
            
        <?php include("leftBar.php"); ?>
            
        <?php include("rightBar.php"); ?>
        
        <?php include_once ('imports.php'); ?>
            
        <?php
            session_start();
            $serializacaoUsuario = $_SESSION['usuario'];
            //echo $serializacaoUsuario;
            $usuario = unserialize($serializacaoUsuario);
        ?>

       

            <!-- titulo do conteudo-->
            <header class="major">
                <h2>Perfil</h2>
            </header>
            <!-- Conteudo-->

            <fieldset>
                <legend>Dados de Login</legend>
                <p>
                    <b>E-mail: </b><?php echo $usuario->getEmail();?>  <br/>
                </p>
            </fieldset>

            <fieldset>
                <legend>Dados Pessoais</legend>
                <p class="p"><b> Nome: </b><?php echo $usuario->getNome();?>  </p>
            </fieldset>

                <ul class="actions">
                    <li><a href="editarPerfil.php" class="button">Editar Perfil</a></li>
                </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
        <br><br><br><br><br>
           <?php include("footer.php") ?>    
        </div>
         

