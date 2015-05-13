<!DOCTYPE html>
<html>
<head>
	<title>Opine Mais</title>
	<!-- IMPORTAÇÔES DE ARQUIVOS CSS -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="all"/>

	<!--IMPORTAÇÔES DE ARQUIVOS JAVASCRIPT-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/funcao.js"></script>
	<script type="text/javascript">
		jQuery(function(){
		    jQuery('form.rating').rating();
		});</script>
</head>

<body>

	<div id="geral">
	<?php
	session_start();
	ob_start();
		include_once 'util/connection.php';
		//include_once 'util/sessao.php';
		$dados_produto = mysql_query("select * from produto");
			while($sql = mysql_fetch_array($dados_produto)){
				$id_produto = $sql['id_produto'];
				$titulo = $sql['nome_produto'];
				$descricao = $sql['detalhes_produto'];

	?>
		<div class="postagem">
			<h2><?php echo $titulo ?></h2>
			<h4>Descrição:</h4>
			<p><?php echo $descricao ?></p>

			<span class="abre_coment">Comentários</span>

			 <?php
			 	if(!empty($_GET['id'])){
			 		if($_GET['id'] == $id_produto){
			 			echo '<div id="comentarios" style="display:block">';
			 		}else{
			 			echo '<div id="comentarios">';
			 		}
			 	}else{
			 		echo '<div id="comentarios">';
			 	}
			 ?>
			 <form action="" method="post" name="form1" id="form_comentario">
			 	<input type="text" name="nome_comentario" value="Digite seu nome" class="campo"/>
			 	<input type="text" name="comentario" size="50" value="Digite seu comentário" class="campo"/>
			 	<input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>" />
			 	<input type="submit" name="botao" style="display:none" />
			 </form>

			 <?php

			 $dados_comentario = mysql_query("select * from opiniao where id_produto = '$id_produto'");
			  		 	while($sql = mysql_fetch_array($dados_comentario)){
				  		 	$id_opiniao = $sql['id_opiniao'];
								$titulo_opiniao = $sql['titulo_opiniao'];
								$descricao_opiniao = $sql['descricao_opiniao'];
			 ?>

				 	<div class="comentarios" id="<?php echo $id_opiniao; ?>">
				 		<strong><?php echo $titulo_opiniao; ?></strong>
				 		<p><?php echo $descricao_opiniao; ?></p>

				 		<span class="abre_respostas">Respostas</span>

							<?php
								if(!empty($_GET['id_opiniao'])){
									if($_GET['id_opiniao'] == $id_opiniao){
										echo '<div id="respostas" style="display:block">';
									}else{
										echo '<div id="respostas">';
									}
								}else{
									echo '<div id="respostas">';
								}
							?>
								

							<?php
								$dados_resposta = mysql_query("select * from resposta where id_opiniao = '$id_opiniao'");

								while($linha = mysql_fetch_array($dados_resposta)){
									$id_resposta = $linha['id_resposta'];
									$titulo_resposta = $linha['titulo_resposta'];
									$descricao_resposta = $linha['descricao_resposta'];
							?>
								<div class="respostas" id="id_resposta<?php echo $id_resposta;?>">
					 				<strong><?php echo $titulo_resposta; ?></strong>
					 				<p><?php echo $descricao_resposta; ?></p>
					 			</div>
							<?php
								}
							?>
								<form action="" method="post" name="form_respostas" id="form_respostas" style="padding:10px;">
					 				<input type="text" name="nome_resposta" value="Digite seu nome" class="campo"/>
					 				<input type="text" name="resposta" value="Digite sua resposta" class="campo" size="40" />
									<input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>" />
									<input type="hidden" name="id_opiniao" value="<?php echo $id_opiniao; ?>" />
					 				<input type="submit" name="botao_respostas" style="display:none" />
					 			</form>					 			
				 		</div><!--id respostas-->
				 	</div><!--classe comentarios-->
				 	<?php
						}
					?>
			</div><!--comentarios-->
		</div><!--classe postagem-->

		<?php
			 }
			include 'util/reg_comentario.php';
			include 'util/reg_resposta.php';
		?>

	</div><!--geral-->
</body>
</html>
