
	<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="UTF-8">
		<title>Cadastre-se - Opine Mais </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
                <link rel="stylesheet" type="text/css" href="css/screen.css">
		    <link rel="shortcut icon" href="images/logtop.png" />
                    

                    
	</head>
	<body>
            <div class="main">
       
		<?php include("header.php")?>
                <?php include("leftBar.php")?>
                <?php include("rightBar.php")?>

				<div id="content">
			<header class="major">
				<h1>Cadastre-se</h1>
			</header>
			<!-- Formulário  aqui! -->
			<form method="POST" name="fusuario" action="control/cadastrarUsuarioControl.php">
				
				<fieldset >
					<legend>Dados de Login</legend>
					<label for="email">E-mail:</label> <p><input type="email"
                                                                                     placeholder="Digite o E-mail" name="email" id="email"  required="email" size=40></p>

                                        <label for="senha">Senha:</label><br/> <p><input type="password"
                                                                                         placeholder="Digite a Senha" name="senha" maxlenght="15" id="senha" size=40 required="senha"></p>
				</fieldset>
				<fieldset>
					<legend>Dados Pessoais</legend>
					<label for="nome">Nome Completo</label> <p><input type="text"
						placeholder="Digite seu nome completo" name="nome" id="nome"
                                                size=40 required="nome"></p>	
					
				</fieldset>

				<div >
					<ul class="actions">
						<li><input type="submit"  class=button value="Confirmar" /></li>
						<!-- <li><input type="reset" value="Limpar" /></li> -->
					</ul>
				</div>

			</form>
		</div>
      
        	<br>
                <br>
                <br>
                
                                

  <?php include("footer.php") ?>
       </div>
        </div>