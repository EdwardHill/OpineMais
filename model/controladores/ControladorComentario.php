<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorComentario
 *
 * @author ivan
 */
class ControladorComentario{
    
    private $repositorioComentario;
    
    function __construct() {
        $this->repositorioComentario = RepositorioComentario::getInstance();
    }


    public function adicionarComentario(\Comentario $comentario) {
        $this->repositorioComentario->adicionarComentario($comentario);
    }

    public function editarComentario(\Comentario $comentario) {
        $this->repositorioComentario->editarComentario($comentario);
    }

    public function listarComentario() {
        return $this->repositorioComentario->listarComentario();
    }

    public function pesquisarComentario(\Comentario $comentario) {
        return $this->repositorioComentario->pesquisarComentario($comentario);
    }

    public function removerComentario(\Comentario $comentario) {
        $this->repositorioComentario->removerComentario($comentario);
    }    
    
    public function listarComentariosPorOpiniao(\Opiniao $opiniao){
        return $this->repositorioComentario->listarComentariosPorOpiniao($opiniao);
    }    
}
