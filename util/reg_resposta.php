<?php
session_start();
ob_start();
	if(isset($_POST['botao_respostas'])){
		$id_produto = $_POST['id_produto'];
    	$id_opiniao = $_POST['id_opiniao'];
		$titulo = $_POST['nome_resposta'];
		$descricao = $_POST['resposta'];

		$reg_resposta = mysql_query("insert into resposta(id_opiniao,titulo_resposta,descricao_resposta) value('$id_opiniao','$titulo','$descricao')");

		$dados_resposta = mysql_query('select * from resposta');
				while($sql = mysql_fetch_array($dados_resposta)){
					$id_resposta = $sql['id_resposta'];
				}

		header("Location: Index.php?id=$id_produto&id_opiniao=$id_opiniao#id_resposta$id_resposta");
	}
?>
