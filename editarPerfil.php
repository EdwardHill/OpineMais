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

           <form method="POST" name="fusuario" action="control/editarUsuario.php">				
				<fieldset >
					<legend>Dados de Login</legend>
					<label for="email">E-mail:</label> <input type="email"
						placeholder="Digite o E-mail" value="<?php echo $usuario->getEmail();?>" name="email" id="email"  required="email" size=60>

                                        <label for="senha">Senha:</label><br/> <input type="password"
						placeholder="Digite a Senha" value="<?php echo $usuario->getSenha();?>" name="senha" maxlenght="15" id="senha" size=15 required="senha">
				</fieldset>
				<fieldset>
					<legend>Dados Pessoais</legend>
					<label for="nome">Nome Completo</label> <input type="text"
						placeholder="Digite seu nome completo" name="nome" id="nome"
						size=60  value="<?php echo $usuario->getNome();?>"required="nome">
		 
						
										
				</fieldset>

				<div class="12u">
					<ul class="actions">
						<li><input type="submit"   value="Confirmar Cadastro" /></li>
						<!-- <li><input type="reset" value="Limpar" /></li> -->
					</ul>
				</div>

			</form>
          
        </div>



    </body>
</html>
