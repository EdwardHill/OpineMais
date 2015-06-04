<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepositorioOpiniao
 *
 * @author Jackson
 */
//include('../model/util/connection.php');
//include('../model/dados/IRepositorioOpiniao.php');

class RepositorioOpiniao implements IRepositorioOpiniao{

    private static $instance = null;
    
    private function __construct() {

    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function adicionarOpiniao(\Opiniao $opiniao) {
        $result = mysql_query("insert into opiniao(mensagem,qualificacao,nota,id_usuario,id_produto) "
                . "values "
                . "('".$opiniao->getMensagem()."',"
                . "'".$opiniao->getQualificacao()."',"
                . $opiniao->getNota().","
                . $opiniao->getUsuario()->getId_usuario().","
                . $opiniao->getProduto()->getId_produto().")");
//        echo $result;
//        echo 'Cadastro de Opiniao FEITO';
    }

    public function editarOpiniao(\Opiniao $opiniao) {
        $result = mysql_query("update opiniao set "
                . "mensagem = '".$opiniao->getMensagem()."', "
                . "qualificacao = '".$opiniao->getQualificacao()."', "
                . "nota = ".$opiniao->getNota()
                . "where id_opiniao = ".$opiniao->getId_opiniao());
    }

    public function listarOpiniao() {
        $result = mysql_query('select * from opiniao');

        $arrayOpiniao = array();
        while( $row = mysql_fetch_array($result)){
            $id_opiniao = $row['id_opiniao'];
            $mensagem = $row['mensagem'];
            $qualificacao = $row['qualificacao'];
            $nota = $row['nota'];
            $id_usuario = $row['id_usuario'];
            $id_produto = $row['id_produto'];

            $usuario = new Usuario($id_usuario);
            $produto = new Produto($id_produto);
            $opiniao = new Opiniao($id_opiniao, $mensagem, $qualificacao, $nota, $usuario, $produto);

            array_push($arrayOpiniao, $opiniao);
        }
        return $$arrayOpiniao;
    }

    public function pesquisarOpiniao(\Opiniao $opiniao) {
        $result = mysql_query('select * from opiniao where id_opiniao = '.$opiniao->getId_opiniao());
        $opiniao=null;
        while( $row = mysql_fetch_array($result)){
            $id_opiniao = $row['id_opiniao'];
            $mensagem = $row['mensagem'];
            $qualificacao = $row['qualificacao'];
            $nota = $row['nota'];
            $id_usuario = $row['id_usuario'];
            $id_produto = $row['id_produto'];

            $usuario = new Usuario($id_usuario);
            $produto = new Produto($id_produto);
            $opiniao = new Opiniao($id_opiniao, $mensagem, $qualificacao, $nota, $usuario, $produto);
        }
        return $opiniao;
    }

    public function removerOpiniao(\Opiniao $entidade) {
        $result = mysql_query('delete from opiniao where id_opiniao = '.$entidade->getId_opiniao());
    }

    public function listarOpinioesPorProduto(\Produto $produto){
        $result = mysql_query("select * from opiniao where id_produto=" . $produto->getId_produto());
        $arrayOpiniao = array();
        while( $row = mysql_fetch_array($result)){
            $id_opiniao = $row['id_opiniao'];
            $mensagem = $row['mensagem'];
            $qualificacao = $row['qualificacao'];
            $nota = $row['nota'];
            $id_usuario = $row['id_usuario'];
            $id_produto = $row['id_produto'];

            $usuario = new Usuario($id_usuario);
            $produto = new Produto($id_produto);
            $opiniao = new Opiniao($id_opiniao, $mensagem, $qualificacao, $nota, $usuario, $produto);

            array_push($arrayOpiniao, $opiniao);
        }
        return $$arrayOpiniao;
    }

}
