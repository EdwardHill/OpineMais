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
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcut icon" href="images/logtop.png" />

    </head>
    <body>
        <?php
       include('imports.php');
        
       $fachada = new Fachada();
        $usu =new Usuario();
        $usu->setId_usuario(1);
        $usu2 = $fachada->pesquisarUsuario($usu);
        
        ?>
        <?php include("header.php") ?>
        <?php include("leftBar.php") ?>
        <?php include("rightBar.php") ?>
        <div id="content">

            <!-- titulo do conteudo-->
            <header class="major">		
                <h2>Perfil</h2>
            </header>
            <!-- Conteudo-->

            <fieldset>
                <legend>Dados de Login</legend>
                <p>
                    E-mail:<?php echo $usu2->getEmail();?>  <br/>
                </p>
            </fieldset>

            <fieldset>		
                <legend>Dados Pessoais</legend>
                <p class="p">Nome:<?php echo $usu2->getNome();?>  </p>
            

            </fieldset>
          
                <ul class="actions">

                    <li><a href="editarPerfil.php" class="button">Editar Perfil</a></li>

                </ul>
          
        </div>



    </body>
</html>
