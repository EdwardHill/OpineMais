
	<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="UTF-8">
		<title>Home - Opine Mais </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
                <link rel="stylesheet" type="text/css" href="css/estilo.css">
                <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
		    <link rel="shortcut icon" href="images/logtop.png" />

	</head>
	<body>
  	<div class="main">

        <?php 
        session_start();
        include("header.php");
					
         	include("leftBar.php");?>
         	

				
						<header class="major">
							<h2>Cadastro de Produtos</h2>
							<h4><?php$mensagem?></h4>
						</header>
						<!-- Formulário aqui! -->
				      <form method="POST" action="control/cadastrarProdutoControl.php"enctype="multipart/form-data" >

								<fieldset>
									<legend>
										<strong>Dados do Produto</strong>
									</legend>
					                                 <p>
										<label for="nome">Nome do Produto:</label> <input type="text"
											name="nome_produto" id="nome" size=60>
									</p>
									<p>
										<label for="descrição">Descrição:</label> <input type="text"
											name="descricao" id="descrição" size=60>
									</p>
									<p>
										<label for="marca">Marca:</label> <input type="text"
										name="marca" id="marca" size=60>
									</p>
                                                                        <p>
										<label for="categoria">Categoria:
                                                                                    <select name="categoria" id="categoria">
											<option value="Não Selecionada">Escolha a categoria</option>
											<option value="Eletroeletronicos">Eletroeletrônico</option>
                                                                                        <option value="Eletrodomestico">Eletrodomésticos</option>
                                                                                        <option value="TV & Smart TV">TV & Smart TV</option>
                                                                                        <option value="Celulares e SmartPhones">Celulares e Smartphones</option>
                                                                                        <option value="Games & Consoles">Games & Consoles</option>
											<!--<option value="Cosmeticos">Cosméticos</option>-->
										</select>
										</label>
									</p>

									<p>
										<label for="arquivo">Upload de Imagem:</label> <input type="file" name="arquivo"
											id="arquivo" size=10>
									</p>
								</fieldset>

								<div class="12u">
									<ul class="actions">
										<li><input type="submit" value="Confirmar" /></li>
										<!-- <li><input type="reset" value="Limpar" /></li>-->
									</ul>
								</div>
						</form>
				  
		 
            <?php include("footer.php") ?>
      </div>
