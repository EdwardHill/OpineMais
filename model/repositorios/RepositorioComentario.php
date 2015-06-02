<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepositorioComentario
 *
 * @author Jackson
 */
class RepositorioComentario implements IRepositorio{
    
    private function __construct(){
    }
    
    public static function getInstance(){
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }
    
    public function adicionar(\Comentario $entidade) {
        $result = mysql_query("insert into comentario(mensagem) "
            . "values ('".$entidade->getMensagem()."')");
        
        $id_comentario = mysql_insert_id();
        $id_usuario = $entidade->getUsuario()->getId_usuario();
        $id_opiniao = $entidade->getOpiniao()->getId_opiniao();
        
        $result = mysql_query("insert into comentario_opiniao_usuario "
                . "(id_usuario,id_opiniao,id_comentario)"
                . "values ($id_usuario,$id_opiniao,$id_comentario)");
    }

    public function editar(\Comentario $entidade) {
        $result = mysql_query("update comentario set "
                . "mensagem = '".$entidade->getMensagem()."' "
                . "where id_comentario = ".$entidade->getId_comentario());
    }

    public function listar() {
        
        
    }

    public function pesquisar(\Comentario $entidade) {
        
    }

    public function remover(\Comentario $entidade) {
        
    }

//put your code here
}
