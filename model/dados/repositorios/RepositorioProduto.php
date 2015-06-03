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
include("../model/util/connection.php");

class RepositorioProduto{

    private static $instance = null;

    private function __construct(){
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function adicionar(\Produto $entidade) {

        $sql = "insert into produto (nome_produto,detalhes,imagem,qualificacao_positiva,qualificacao_negativa,nota_media,categoria,marca,id_usuario) values ('".$entidade->getNome_produto()."','".$entidade->getDetalhes()."','".$entidade->getImagem()."',".$entidade->getQualificacao_positiva().",".$entidade->getQualificacao_negativa().",".$entidade->Nota_media().",".$entidade->getCategoria().",".$entidade->getMarca().",".$entidade->getId_usuario().")";

        $result = mysql_query($sql);
    }

    public function editar(\Produto $entidade) {
        $sql = "update produto set nome_produto='".$entidade->getNome_produto()."', detalhes='".$entidade->getDetalhes()."', imagem='".$entidade->getImagem()."', qualificacao_positiva=".$entidade->getQualificacao_positiva().", qualificacao_negativa=".$entidade->getQualificacao_negativa().", nota_media=".$entidade->Nota_media().", categoria='". $entidade->getCategoria()."', marca='". $entidade->getMarca()."' where id_produto=". $entidade->getId_produto().")";
        $result = mysql_query($sql);
    }

    public function listar() {
        $sql = "select * from produto";
        $result = mysql_query($sql);
        $arrayProduto = array();

        while ($sql = mysql_fetch_array($result)){
            $id_produto = $sql['id_produto'];
            $nome_produto = $sql['nome_produto'];
            $detalhes = $sql['detalhes'];
            $imagem = $sql['imagem'];
            $qualificacao_positiva = $sql['qualificacao_positiva'];
            $qualificacao_negativa = $sql['qualificacao_negativa'];
            $nota_media = $sql['nota_media'];
            $categoria = $sql['categoria'];
            $marca = $sql['marca'];
            $id_usuario = $sql['id_usuario'];

            $usuario = new Usuario($id_usuario);

            $produto = new Produto($id_produto,$nome_produto,$detalhes,$imagem,$qualificacao_positiva,$qualificacao_negativa,$nota_media,$categoria,$marca,$usuario);

            array_push($arrayProduto, $produto);
        }
        return $arrayProduto;
    }

    public function pesquisar(\Produto $entidade) {
        $sql = ("select * from produto where id_produto='". $entidade->getId_produto()."'");
        $dados = mysql_query($sql);
        while ($sql = mysql_fetch_array($dados)){
            $id_produto = $sql['id_produto'];
            $nome_produto = $sql['nome_produto'];
            $detalhes = $sql['detalhes'];
            $imagem = $sql['imagem'];
            $qualificacao_positiva = $sql['qualificacao_positiva'];
            $qualificacao_negativa = $sql['qualificacao_negativa'];
            $nota_media = $sql['nota_media'];
            $categoria = $sql['categoria'];
            $marca = $sql['marca'];
            $id_usuario = $sql['id_usuario'];

            $usuario = new Usuario($id_usuario);

            $produto = new Produto($id_produto,$nome_produto,$detalhes,$imagem,$qualificacao_positiva,$qualificacao_negativa,$nota_media,$categoria,$marca,$usuario);
        }
        return $produto;
    }

    public function remover(\Produto $entidade) {
        $sql("delete from produto where id_produto=".$entidade->getId_produto());
        $result = mysql_query($sql);
    }

//put your code here
}
