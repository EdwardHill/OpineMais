<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <meta charset="UTF-8">
		<title>Login- Opine Mais </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
                
		    <link rel="shortcut icon" href="images/logtop.png" />
       
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="main">
        
	<div id="nav2">
				<div id="header-wrapper">
				
				<div id="header" class="container">
				
						<h1 id="logo"><a href="index.php"><img src="css/images/opmais.png" alt= "logo OpineMais"  style="width:5.8em ;heigth:14em;"></a></h1>
				
				<ul class="divided">
                                    <li><img src="css/images/user.png" alt="Logo Perfil"  style="width:2.2em;" > Ola, Visitante  </li> 
                                   
					</ul>
                                    <ul class="actions2">             
                                    <li></li>
                                    <li></li>
                                    </ul>
                                   
					
			</div>	
                                   
		</div>
             
	</div>
        <?php include("leftBar.php")?>
         <?php include("rightBar.php")?>
        <div class="content">
          <div id="login">
				<header class="major">		
					<h3>Login</h3>
             		                             <?php if(!empty($_SESSION["mensagem"])){
	 
	 		echo $_SESSION["mensagem"];
	 	}?>
				</header>
			<form method="POST" action="util/verificaSessao.php">
                         
			<fieldset >
			<legend>Dados de Login</legend>
                        <p><label for="email">E-mail</label><br/>
				<input type="email" placeholder="Digite o Email" name="email" id="email" size=40 required>  </p>
				
				<p><label for="senha">Senha</label><br/>
				<input type="password" placeholder="Digite a Senha" name="senha" id="senha" size=40 required>  </p>
			</fieldset>
						<div class="12u">
										<ul class="actions">
											<li><input type="submit"   class="button3" value="Entrar" alt="Aperte Enter Para entrar"/></li>
                                                                                        <li><a href="cadastro.php" class="button3" alt="Aperte Enter para um novo Cadastro">Cadastrar-se</a></li>
                                                                                        <li><a href="#" class="button3" alt="Aperte Enter para um novo Cadastro"><img src="css/images/face.png" style="width:1.5em;"><br></a></li>
										</ul>
						</div>
			</form>
			</div>
        </div>
            </div>
        
          <?php include("footer.php") ?>
        
    </body>
</html>
