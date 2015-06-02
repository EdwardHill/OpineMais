<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorProduto
 *
 * @author ivan
 */
class ControladorProduto {
    
    private $repositorioProduto;
    
    function __construct() {
        $this->repositorioProduto = RepositorioProduto::getInstance();
    }
           
    public function adicionarProduto(\Produto $entidade) {
        $this->repositorioProduto->adicionar($entidade);
    }

    public function editarProduto(\Produto $entidade) {
        $this->repositorioProduto->editar($entidade);
    }

    public function listarProduto() {
        return $this->repositorioProduto->listar();
    }

    public function pesquisarProduto(\Produto $entidade) {
        return $this->repositorioProduto->pesquisar($entidade);
    }

    public function removerProduto(\Produto $entidade) {
        $this->repositorioProduto->remover($entidade);
    }

}
