<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *puli===
 * @author Edward_Hill
 */
interface IRepositorio {
    
    public function adicionar($entidade);
    public function editar($entidade);
    public function remover($entidade);
    public function pesquisar($entidade);
    public function listar($entidade);
        
}

