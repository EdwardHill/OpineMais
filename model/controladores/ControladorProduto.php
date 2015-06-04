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
        $this->repositorioProduto->adicionarProduto($entidade);
    }

    public function editarProduto(\Produto $entidade) {
        $this->repositorioProduto->editarProduto($entidade);
    }

    public function listarProduto() {
        return $this->repositorioProduto->listarProduto();
    }

    public function pesquisarProduto(\Produto $entidade) {
        return $this->repositorioProduto->pesquisarProduto($entidade);
    }

    public function removerProduto(\Produto $entidade) {
        $this->repositorioProduto->removerProduto($entidade);
    }

}
