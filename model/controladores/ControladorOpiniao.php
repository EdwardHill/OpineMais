<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorOpiniao
 *
 * @author ivan
 */
class ControladorOpiniao {
    
    private $repositorioOpinicao;
    
    function __construct() {
        $this->repositorioOpinicao = RepositorioOpiniao::getInstance();
    }

    public function adicionarOpiniao(\Opiniao $entidade) {
        $this->repositorioOpinicao->adicionar($entidade);
    }

    public function editarOpiniao(\Opiniao $entidade) {
        $this->repositorioOpinicao->editar($entidade);
    }

    public function listarOpiniao() {
        return $this->repositorioOpinicao->listar();
    }

    public function pesquisarOpiniao(\Opiniao $entidade) {
        return $this->repositorioOpinicao->pesquisar($entidade);
    }

    public function removerOpiniao(\Opiniao $entidade) {
        $this->repositorioOpinicao->remover($entidade);
    }
    
    public function ListarOpinioesPorProduto(\Produto $entidade){
        return $this->repositorioOpinicao->ListarOpinioesPorProduto($entidade);
    }

}
