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
        
        $sql=NULL;
        if($opiniao->getQualificacao() == Qualificacao::BOM){
            $sql = 'update produto set qualificacao_positiva=(qualificacao_positiva+1) '
                    . 'where id_produto='.$opiniao->getProduto()->getId_produto();
        }else if($opiniao->getQualificacao() == Qualificacao::RUIM){
            $sql = 'update produto set qualificacao_negativa=(qualificacao_negativa+1) '
                    . 'where id_produto='.$opiniao->getProduto()->getId_produto();
        }
        
        if($result === TRUE && !empty($sql)){
            $result = mysql_query($sql);
        }
        
    }

    public function editarOpiniao(\Opiniao $opiniao) {
        $atual = $this->pesquisarOpiniao($opiniao);
        
        $result = mysql_query("update opiniao set "
                . "mensagem = '".$opiniao->getMensagem()."', "
                . "qualificacao = '".$opiniao->getQualificacao()."', "
                . "nota = ".$opiniao->getNota()
                . " where id_opiniao = ".$opiniao->getId_opiniao());
        
        $sql=NULL;
        if($atual->getQualificacao() == $opiniao->getQualificacao()){
            $sql=NULL;
        }else{
            if($opiniao->getQualificacao() == Qualificacao::BOM && 
                    $atual->getQualificacao() == Qualificacao::RUIM){
                $sql = 'update produto set qualificacao_positiva=(qualificacao_positiva+1), '
                        . 'qualificacao_negativa=(qualificacao_negativa-1) '
                        . 'where id_produto='.$opiniao->getProduto()->getId_produto();
            }else if($opiniao->getQualificacao() == Qualificacao::RUIM && 
                    $atual->getQualificacao() == Qualificacao::BOM){
                $sql = 'update produto set qualificacao_positiva=(qualificacao_positiva-1), '
                        . 'qualificacao_negativa=(qualificacao_negativa+1) '
                        . 'where id_produto='.$opiniao->getProduto()->getId_produto();
            }
        }
        
        if($result === TRUE && !empty($sql)){
            $result = mysql_query($sql);
        }
        
    }

    public function listarOpiniao() {
        $result = mysql_query('select * from opiniao order by id_opiniao desc');

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
        return $arrayOpiniao;
    }

    public function pesquisarOpiniao(\Opiniao $opiniao) {
        $result = mysql_query('select * from opiniao where id_opiniao = '.$opiniao->getId_opiniao());
        $opiniao=NULL;
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

    public function removerOpiniao(\Opiniao $opiniao) {
        $opiniao = $this->pesquisarOpiniao($opiniao);
        $sql = null;
        if($opiniao->getQualificacao() == Qualificacao::BOM){
            $sql = 'update produto set qualificacao_positiva=(qualificacao_positiva-1) '
                    . 'where id_produto='.$opiniao->getProduto()->getId_produto();
        }else if($opiniao->getQualificacao() == Qualificacao::RUIM){
            $sql = 'update produto set qualificacao_negativa=(qualificacao_negativa-1) '
                    . 'where id_produto='.$opiniao->getProduto()->getId_produto();
        }
        //Removendo Opinião
        $result = mysql_query('delete from opiniao where id_opiniao = '.$opiniao->getId_opiniao());
        //Decrementando uma opinião no produto
        if($result === TRUE && !empty($sql)){
            $result = mysql_query($sql);
        }
    }

    public function listarOpinioesPorProduto(\Produto $produto){
        $result = mysql_query("select * from opiniao where id_produto=" . $produto->getId_produto()." order by id_opiniao desc");
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
        return $arrayOpiniao;
    }

}
