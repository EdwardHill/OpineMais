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
    
    public function adcionar(Usuario $entidade);
    public function editar(Usuario $entidade);
    public function pesquisar(Usuario $entidade);
    public function remover(Usuario $entidade);
        
}

