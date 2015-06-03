<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Jackson
 */
interface IRepositorioProduto {
    //put your code here
    public function adicionarProduto(\Produto $produto);
    public function editarProduto(\Produto $produto);
    public function removerProduto(\Produto $produto);
    public function pesquisarProduto(\Produto $produto);
    public function listarProduto();
    
}
