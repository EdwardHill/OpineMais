<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepositorioUsuario
 *
 * @author Edward_Hill
 */
include("../model/util/connection.php");

class RepositorioUsuario {
    
    private static $instance = null;
            function __construct() {
        
    }

   public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function adicionarUsuario(\Usuario $usuario) {
      $result = mysql_query(" insert into usuario (nome, email, senha) values "
              . "('" . $usuario->getNome() . "','" . $usuario->getEmail() . "','" . $usuario->getSenha() . "')");
    }

    public function pesquisarUsuario(\Usuario $usuario) {

        $dados = mysql_query("select * from usuario  where id_usuario = ".$usuario->getId_usuario());
        while ($sql = mysql_fetch_array($dados)) {
            $usuario->setNome($sql['nome']);
            $usuario->setEmail($sql['email']);
            $usuario->setSenha($sql['senha']);
        }
        return $usuario;
    }

    public function removerUsuario(\Usuario $usuario) {
        $result = mysql_query("delete from usuario where id_usuario = " . $usuario->getId_usuario());
    }

    public function editarUsuario(\Usuario $usuario) {

        $result = mysql_query("update usuario set nome = "
                . "'" . $usuario->getNome() . "',email = '" . $usuario->getEmail() . "',senha = '" . $usuario->getSenha() . "' where id_usuario = ".$usuario->getId_usuario());
    }

    public function listarUsuario() {
        
    }

}
