<?php
session_start();
?>
	<div id="nav2">
				<div id="header-wrapper">
				<div id="header" class="container">
        <h1 id="logo"><a href="home.php"><img src="css/images/opmais.png" alt= "logo OpineMais"  style="width:5.8em ;heigth:14em;"></a></h1>
				<ul class="divided">
        <li><img src="css/images/user.png" alt="Logo Perfil"  style="width:2.2em;" > Olá,  <?php
            if (!empty($_SESSION['nome_usuario'])) {
                $nome = $_SESSION['nome_usuario'];
                echo $nome;
            } else {
                echo 'Visitante';
            }
            ?>   </li>
					</ul>
          <ul class="btheader">
          <li></li>
             <li><a href="util/logout.php"  class="button">Sair</a></li>
          </ul>
			</div>
		</div>
	</div>
