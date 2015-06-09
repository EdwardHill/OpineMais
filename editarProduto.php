
	<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="UTF-8">
		<title>Home - Opine Mais </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
                <link rel="stylesheet" type="text/css" href="css/estilo.css">
                <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
		     <link rel="shortcut icon" href="images/short.png" />

	</head>
	<body>
  	<div class="main">

        <?php 
        session_start();
        include("header.php");
      
        include_once('imports.php');
        
        if(!empty($_SESSION['usuario'])){
            $serializacao = $_SESSION['usuario'];
            $usuario = unserialize($serializacao);
        }else{
            header('Location: home.php');
        }
        if(!empty($_GET['id_produto'])){
            $id_produto = $_GET['id_produto'];
            $produto = new Produto($id_produto);
            
            $fachada = Fachada::getInstance();
            $produto = $fachada->pesquisarProduto($produto);
        }
        ?>
         	

				
						<header id="header">
							<h2>Editar Produto</h2>
                                                </header>
							<h4><?php$mensagem?></h4>
                                                        <p style="text-align: center; color: red;">
                                                            <?php 
                                                                if(!empty($_GET['mensagem'])){
                                                                    echo $_GET['mensagem'];
                                                                }
                                                            ?>
                                                        </p>
						</header>
						<!-- Formulário aqui! -->
                                                <img src="images/upload/<?php echo $produto->getImagem();?>">
				      <form method="POST" action="control/editarProdutoControl.php" enctype="multipart/form-data" >
                                          <input type="hidden" name="id_produto" value="<?php echo $produto->getId_produto();?>">
                                          <input type="hidden" name="arquivoAtual" value="<?php echo $produto->getImagem();?>">
								<fieldset>
									<legend>
										<strong>Dados de Edição</strong>
									</legend>
					                                 <p>
                                                                            <label for="nome">Nome do Produto:</label> <input type="text"
                                                                            name="nome_produto" value="<?php echo $produto->getNome_produto();?>" id="nome" size=60>
									</p>
                                                               		<p>
                                                                            <label for="marca">Marca:</label> <input type="text"
                                                                            name="marca" value="<?php echo $produto->getMarca();?>" id="marca" size=60>
									</p>
									<p>
                                                                            <label for="descricao">Descrição:</label> <br/>
                                                                            <input type="text" name="descricao" value="<?php echo $produto->getDetalhes();?>" size="50"/>
									</p>
                                                                        <p>
                                                                            <label for="categoria">Categoria:
                                                                                <select name="categoria" id="categoria">
                                                                                    <option value="<?php echo $produto->getCategoria();?>"><?php echo $produto->getCategoria();?></option>
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

									<p>
                                                                            <label for="arquivo">Upload de Imagem:</label>
                                                                            <input type="file" name="arquivo" id="arquivo" size=10>
									</p>
								</fieldset>

								<div class="12u">
									<ul class="actions">
										<li><input type="submit" value="Editar" /></li>
										<!-- <li><input type="reset" value="Limpar" /></li>-->
									</ul>
								</div>
						</form>
				  
		 
            <?php include("footer.php") ?>
      </div>
