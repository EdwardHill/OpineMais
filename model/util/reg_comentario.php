<?php
//session_start();
ob_start();
	if(isset($_POST['botao'])){
		$id_produto = $_POST['id_produto'];
		$titulo = $_POST['nome_comentario'];
		$descricao = $_POST['comentario'];

		$reg_coment = mysql_query("insert into opiniao(id_produto,titulo_opiniao,descricao_opiniao) value('$id_produto','$titulo','$descricao')");
		
		$dados_comentario = mysql_query('select * from opiniao');		
				while($sql = mysql_fetch_array($dados_comentario)){
					$id_opiniao = $sql['id_opiniao'];
				}
				
		header("Location: home.php?id=$id_produto#$id_opiniao");
	}
?>