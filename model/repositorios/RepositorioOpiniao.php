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
include("../util/connection.php");

class RepositorioOpiniao implements IRepositorio{
    public function adicionar(\Opiniao $entidade) {
        $result = mysql_query("insert into opiniao(mensagem,qualificacao,nota,id_usuario,id_produto) "
                . "values "
                . "('".$entidade->getMensagem()."',"
                . "'".$entidade->getQualificacao."',"
                . $entidade->getNota.","
                . $entidade->getUsuario()->getId_usuario().","
                . $entidade->getProduto()->getId_produto().")");
        echo $result;
        echo 'Cadastro de Opiniao FEITO';
    }

    public function editar(\Opiniao $entidade) {
        $result = mysql_query("update opiniao set "
                . "mensagem = '".$entidade->getMensagem()."', "
                . "qualificacao = '".$entidade->getQualificacao()."', "
                . "nota = ".$entidade->getNota()
                . "");
    }

    public function listar(\Opiniao $entidade) {
        
    }

    public function pesquisar(\Opiniao $entidade) {
        
    }

    public function remover(\Opiniao $entidade) {
        
    }

//put your code here
}
