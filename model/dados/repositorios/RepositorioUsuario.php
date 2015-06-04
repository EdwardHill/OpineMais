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
//include('../../util/connection.php');
//include('../IRepositorioUsuario.php');
//include('../../entidades/Usuario.php');

class RepositorioUsuario implements IRepositorioUsuario{
    
    private static $instance = null;
    
    private function __construct() {
        
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
    
    public function editarUsuario(\Usuario $usuario) {
        $result = mysql_query("update usuario set nome = "
                . "'" . $usuario->getNome() . "',email = '" . $usuario->getEmail() . "',senha = '" . $usuario->getSenha() . "' "
                . "where id_usuario = ".$usuario->getId_usuario());
    }
    public function pesquisarUsuario(\Usuario $usuario) {
        $result = mysql_query("select * from usuario  where id_usuario = ".$usuario->getId_usuario());
        $usuario = null;
        while ($row = mysql_fetch_array($result)) {
            $id_usuario = $sql['id_usuario'];
            $nome = $sql['nome'];
            $email = $sql['email'];
            $senha = $sql['senha'];
            
            $usuario = new Usuario($id_usuario, $nome, $email, $senha);
        }
        return $usuario;
    }

    public function removerUsuario(\Usuario $usuario) {
        $result = mysql_query("delete from usuario where id_usuario = " . $usuario->getId_usuario());
    }

    public function listarUsuario() {
        $result = mysql_query("select * from usuario");
        $arrayUsuarios = array();
        while ($sql = mysql_fetch_array($result)) {
            $id_usuario = $sql['id_usuario'];
            $nome = $sql['nome'];
            $email = $sql['email'];
            $senha = $sql['senha'];
            
            $usuario = new Usuario($id_usuario, $nome, $email, $senha);
            array_push($arrayUsuario, $usuario);
        }
        return $arrayUsuario;
    }

}
