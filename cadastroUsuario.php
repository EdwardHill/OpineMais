
	<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="UTF-8">
		<title>Cadastre-se - Opine Mais </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
                <link rel="stylesheet" type="text/css" href="css/estilo.css">
		    <link rel="shortcut icon" href="images/logtop.png" />
                     <script src="js/script.js"></script>
 <script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
                    
	</head>
	<body>
            <div class="main">
       
		<?php include("header.php")?>
                <?php include("leftBar.php")?>
                <?php include("rightBar.php")?>

				<div id="content">
			<header class="major">
				<h2>Cadastre-se</h2>
			</header>
			<!-- Formulário  aqui! -->
			<form method="POST" name="fusuario" action="control/cadastrarUsuario.php">
				
				<fieldset >
					<legend>Dados de Login</legend>
					<label for="email">E-mail:</label> <input type="email"
						placeholder="Digite o E-mail" name="email" id="email"  required="email" size=60>

                                        <label for="senha">Senha:</label><br/> <input type="password"
						placeholder="Digite a Senha" name="senha" maxlenght="15" id="senha" size=15 required="senha">
				</fieldset>
				<fieldset>
					<legend>Dados Pessoais</legend>
					<label for="nome">Nome Completo</label> <input type="text"
						placeholder="Digite seu nome completo" name="nome" id="nome"
						size=60 require="nome">
		 
						
										
				</fieldset>

				<div class="12u">
					<ul class="actions">
						<li><input type="submit"  name="sub" value="Confirmar Cadastro" /></li>
						<!-- <li><input type="reset" value="Limpar" /></li> -->
					</ul>
				</div>

			</form>
		</div>
      
        	
                                

  <?php include("footer.php") ?>
       </div>
        </div>