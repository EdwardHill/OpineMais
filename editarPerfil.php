<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Perfil - Opine Mais </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="shortcut icon" href="images/logtop.png" />
    </head>
    <body>
         <div class="main">
             
        <?php session_start();
        include("header.php") ?>
        <?php include("leftBar.php") ?>
        <?php include("rightBar.php") ?>
        <div id="centro">

          <!-- titulo do conteudo-->
         
            <h2>Editar Perfil</h2>
        
              <!-- Conteudo-->
          <form method="POST" name="fusuario" action="control/cadastrarUsuario.php">

    				<fieldset >
    					<legend>Dados de Login</legend>
    					<label for="email">E-mail:</label> <input type="email"
    						placeholder="Digite o E-mail" name="email" id="email" value="<?php echo $_REQUEST['email']?>" required="email" size=60>
                <!-- <label for="senha">Senha:</label><br/> <input type="password"
    						placeholder="Digite a Senha" name="senha" maxlenght="15" id="senha" size=15 required="senha"> -->
    				</fieldset>
    				<fieldset>
    					<legend>Dados Pessoais</legend>
    					<label for="nome">Nome Completo: </label> <input type="text"
    						placeholder="Digite seu nome completo" value="<?php echo $_REQUEST['nome']?>" name="nome" id="nome"
    						size=60 required="nome">
    				</fieldset>

    				<div class="12u">
    					<ul class="actions">
    						<li><input type="submit"   value="Confirmar Edição" /></li>
    						<!-- <li><input type="reset" value="Limpar" /></li> -->
    					</ul>
    				</div>
  			   </form>
        </div>
    </body>
</html>
