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
interface IRepositorioUsuario {
    
    public function adicionarUsuario(\Usuario $usuario);
    public function editarUsuario(\Usuario $usuario);
    public function removerUsuario(\Usuario $usuario);
    public function pesquisarUsuario(\Usuario $usuario);
    public function listarUsuario();  
}

