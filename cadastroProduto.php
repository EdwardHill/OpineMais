
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
         	

				<div id="content2">
						<header class="major">
							<h2>Adicionar Produto</h2>
							<h4><?php $mensagem?></h4>
                                                        <p style="text-align: center; color: red;">
                                                            <?php 
                                                                if(!empty($_GET['mensagem'])){
                                                                    echo $_GET['mensagem'];
                                                                }
                                                            ?>
                                                        </p>
						</header>
						<!-- Formulário aqui! -->
				      <form method="POST" id="cadp" action="control/cadastrarProdutoControl.php"enctype="multipart/form-data" >

								<fieldset>
									<legend>
										<strong>Dados do Produto</strong>
									</legend>
					                                 <p>
										<label for="nome">Nome do Produto:</label> </br><input type="text"
                                                                                                                                  name="nome_produto" id="nome" size=25 maxlength="16">
									</p>
                                                                        <p>
										<label for="marca">Marca:</label><br/> <input type="text"
										name="marca" id="marca" size="25">
									</p>
									<p>
										<label for="descrição">Descrição:</label> <br/><textarea
                                                                                    name="descricao"  form="cadp" id="descrição" ROWS=4 COLS=60 placeholder="Insira a descrição..."></textarea>
									</p>
									
                                                                        
                                                                        <p>
										<label for="categoria">Categoria:
                                                                                    <select name="categoria" id="categoria">
                                                                                        
											<option value="Não Selecionada">Escolha a categoria</option>
                                                                                        <option value="PCs">PCs</option>
                                                                                        <option value="NoteBooks">NoteBooks</option>
                                                                                        <option value="TVs & SmartTVs">TVs & SmartTVs</option>
                                                                                        <option value="Celulares e SmartPhones">Celulares e SmartPhones</option>
                                                                                        <option value="Games & Consoles">Games & Consoles</option>
                                                                                        <option value="Eletrodomesticos">Eletrodomesticos</option>
                                                                                        <option value="Eletroeletronicos">Eletroeletronicos</option>
											<!--<option value="Cosmeticos">Cosméticos</option>-->
										</select>
										</label>
									</p>
<br>
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
                                </div>
		 
            <?php include("footer.php") ?>
      </div>
