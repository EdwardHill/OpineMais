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
    
    public function __construct() {
        $this->repositorioOpinicao = RepositorioOpiniao::getInstance();
    }

    public function adicionarOpiniao(\Opiniao $opiniao) {
        $this->repositorioOpinicao->adicionarOpiniao($opiniao);
    }

    public function editarOpiniao(\Opiniao $opiniao) {
        $this->repositorioOpinicao->editarOpiniao($opiniao);
    }

    public function listarOpiniao() {
        return $this->repositorioOpinicao->listar();
    }

    public function pesquisarOpiniao(\Opiniao $entidade) {
        return $this->repositorioOpinicao->pesquisarOpiniao($opiniao);
    }

    public function removerOpiniao(\Opiniao $entidade) {
        $this->repositorioOpinicao->removerOpiniao($opiniao);
    }
    
    public function listarOpinioesPorProduto(\Produto $produto){
        return $this->repositorioOpinicao->listarOpinioesPorProduto($produto);
    }

}
