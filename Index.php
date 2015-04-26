<!DOCTYPE html>
<html>
<head>
	<title>Opine Mais</title>
	<!-- IMPORTAÇÔES DE ARQUIVOS CSS -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="all"/>

	<!--IMPORTAÇÔES DE ARQUIVOS JAVASCRIPT-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/funcao.js"></script>
</head>

<body>
	<div id="geral">
		<div class="postagem">
			<h2>Título da postagem</h2>
			<p><strong>Lorem Ipsum</strong> é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
			e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de 
			tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco
			 séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. 
			 Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, 
			 e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus 
			 PageMaker.</p>

			 <span class="abre_coment">Comentários</span>

			 <div id="comentarios">

			 <form action="" method="post" name="form1" id="form_comentario">
			 	<input type="text" name="nome_comentario" value="Digite seu nome" class="campo"/>
			 	<input type="text" name="comentario" size="50" value="Digite seu comentário" class="campo"/>
			 </form>

			 	<div class="comentarios">
			 		<strong>Nome</strong>
			 		<p>Comentario em si</p>

			 		<span class="abre_respostas">Respostas</span>
			 		
			 		<div id="respostas">
			 			<div class="respostas">
			 				<strong>Nome</strong>
			 				<p>Resposta</p>
			 			</div>
			 			<form action="" method="post" name="form_respostas" id="form_respostas" style="padding:10px;">
			 				<input type="text" name="nome_resposta" value="Digite seu nome" class="campo"/>
			 				<input type="text" name="resposta" value="Digite sua resposta" class="campo" size="40" />
			 			</form>
			 		</div>

			 	</div>			 	
			 </div><!--comentarios-->
		</div><!--classe postagem-->



	</div><!--geral-->
</body>
</html>