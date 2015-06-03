<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorUsuario
 *
 * @author Jackson
 */

class ControladorUsuario {
    
    private $repositorioUsuario;
    
    function __construct() {
        $this->repositorioUsuario = RepositorioUsuario::getInstance();
    }
    
    public function adicionarUsuario(\Usuario $usuario) {
        $senha = $usuario->getSenha();
        $senhaCodificada = md5($senha);
        $usuario->setSenha($senhaCodificada);
        
        $this->repositorioUsuario->adicionarUsuario($usuario);
    }

    public function editarUsuario(\Usuario $usuario) {
        $u = $this->pesquisarUsuario($usuario);
        
        if($u->getSenha() != $usuario->getSenha()){
            $senhaCriptografada = md5($usuario->getSenha());
            $usuario->setSenha($senhaCriptografada);
        }
                
        $this->repositorioUsuario->editarUsuario($usuario);
    }

    public function listarUsuario() {
        return $this->repositorioUsuario->listarUsuario();
    }

    public function pesquisarUsuario(\Usuario $usuario) {
        return $this->repositorioUsuario->pesquisarUsuario($usuario);
    }

    public function removerUsuario(\Usuario $usuario) {
        $this->repositorioUsuario->removerUsuario($usuario);
    }

}
