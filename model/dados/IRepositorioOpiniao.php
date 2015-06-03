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
interface IRepositorioOpiniao {
    //put your code here
    public function adicionarOpiniao(\Opiniao $opiniao);
    public function editarOpiniao(\Opiniao $opiniao);
    public function removerOpiniao(\Opiniao $opiniao);
    public function pesquisarOpiniao(\Opiniao $opiniao);
    public function listarOpiniao();
    public function listarOpinioesPorProduto(\Produto $produto);
    
}
