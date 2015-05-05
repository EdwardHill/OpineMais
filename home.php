
	<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="ISO-8859-1">
		<title>Home - Opine Mais </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">

		    <link rel="shortcut icon" href="images/logtop.png" />
	</head>
	<body>
		<?php include("header.php")?>

		<?php include("leftBar.php")?>
                <?php include("rightBar.php")?>

				<div id="content">

                                    <form action="#" id="formBusca"method="POST">

		<div id="pesquisar">



                    <label for="busca"></label><input  type="search" name ="buscanome" placeholder="Digite o nome do produto desejado" size="50"/>
                    <input type="submit" class="button"   name="pesquisa" value="BUSCAR" img="css/images/search4.png">

		</div>
                                    </form>

				</div>
				
                                

  <?php include("footer.php") ?>