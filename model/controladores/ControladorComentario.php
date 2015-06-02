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


    public function adicionarComentario(\Comentario $entidade) {
        $this->repositorioComentario->adicionar($entidade);
    }

    public function editarComentario(\Comentario $entidade) {
        $this->repositorioComentario->editar($entidade);
    }

    public function listarComentario() {
        return $this->repositorioComentario->listar();
    }

    public function pesquisarComentario(\Comentario $entidade) {
        return $this->repositorioComentario->pesquisar($entidade);
    }

    public function removerComentario(\Comentario $entidade) {
        $this->repositorioComentario->remover($entidade);
    }    
    
    public function listarComentariosPorOpiniao(\Opiniao $entidade){
        return $this->repositorioComentario->listarComentariosPorOpiniao($entidade);
    }    
}
