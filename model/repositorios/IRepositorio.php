<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edward_Hill
 */

interface IRepositorio {
    
    public function adcionar($entidade);
    public function editar($entidade);
    public function pesquisar();
    public function listar();
    public function remover($entidade);
        
}

