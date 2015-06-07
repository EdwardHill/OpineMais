<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepositorioProduto
 *
 * @author Jackson
 */
//include("../model/util/connection.php");

class RepositorioProduto implements IRepositorioProduto{

    private static $instance = null;

    public function __construct() {

    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function adicionarProduto(\Produto $produto) {
        $result = mysql_query("insert into produto (nome_produto,detalhes,categoria,marca,imagem,qualificacao_positiva,qualificacao_negativa,nota_media,id_usuario) values" .
        "('".$produto->getNome_produto()."','".
        $produto->getDetalhes()."','".
        $produto->getCategoria()."','".
        $produto->getMarca()."','".
        $produto->getImagem()."',".
        $produto->getQualificacao_positiva().",".
        $produto->getQualificacao_negativa().",".
        $produto->getNota_media().",".
        $produto->getUsuario()->getId_usuario().")");

        printf ("insert into produto (nome_produto,detalhes,categoria,marca,imagem,qualificacao_positiva,qualificacao_negativa,nota_media,id_usuario) values" .
        "('".$produto->getNome_produto()."','".
        $produto->getDetalhes()."','".
        $produto->getCategoria()."','".
        $produto->getMarca()."','".
        $produto->getImagem()."',".
        $produto->getQualificacao_positiva().",".
        $produto->getQualificacao_negativa().",".
        $produto->getNota_media().",".
        $produto->getUsuario()->getId_usuario().")");
    }

    public function editarProduto(\Produto $produto) {
        $result = mysql_query("update produto set nome_produto='".
        $produto->getNome_produto().
        "', detalhes='".$produto->getDetalhes().
        "', imagem='".$produto->getImagem().
        "', qualificacao_positiva=".$produto->getQualificacao_positiva().
        ", qualificacao_negativa=".$produto->getQualificacao_negativa().
        ", nota_media=".$produto->Nota_media().
        ", categoria='". $produto->getCategoria().
        "', marca='". $produto->getMarca().
        "' where id_produto=". $produto->getId_produto().")");
    }

    public function listarProduto() {
        $sql = "select * from produto order by id_produto desc";
        $result = mysql_query($sql);
        $arrayProduto = array();

        while ($row = mysql_fetch_array($result)){
            $id_produto = $row['id_produto'];
            $nome_produto = $row['nome_produto'];
            $detalhes = $row['detalhes'];
            $imagem = $row['imagem'];
            $qualificacao_positiva = $row['qualificacao_positiva'];
            $qualificacao_negativa = $row['qualificacao_negativa'];
            $nota_media = $row['nota_media'];
            $categoria = $row['categoria'];
            $marca = $row['marca'];
            $id_usuario = $row['id_usuario'];

            $usuario = new Usuario($id_usuario);

            $produto = new Produto($id_produto,$nome_produto,$detalhes,$imagem,$qualificacao_positiva,$qualificacao_negativa,$nota_media,$categoria,$marca,$usuario);

            array_push($arrayProduto, $produto);
        }
        return $arrayProduto;
    }

    public function pesquisarProduto(\Produto $produto) {
        $sql = ("select * from produto where id_produto = ". $produto->getId_produto());
        $dados = mysql_query($sql);
        while ($row = mysql_fetch_array($dados)){
            $id_produto = $row['id_produto'];
            $nome_produto = $row['nome_produto'];
            $detalhes = $row['detalhes'];
            $imagem = $row['imagem'];
            $qualificacao_positiva = $row['qualificacao_positiva'];
            $qualificacao_negativa = $row['qualificacao_negativa'];
            $nota_media = $row['nota_media'];
            $categoria = $row['categoria'];
            $marca = $row['marca'];
            $id_usuario = $row['id_usuario'];

            $usuario = new Usuario($id_usuario);

            $produto = new Produto($id_produto,$nome_produto,$detalhes,$imagem,$qualificacao_positiva,$qualificacao_negativa,$nota_media,$categoria,$marca,$usuario);
        }
        return $produto;
    }

    public function removerProduto(\Produto $produto) {
        $sql("delete from produto where id_produto=".$produto->getId_produto());
        $result = mysql_query($sql);
    }

}
