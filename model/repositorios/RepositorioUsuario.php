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

    public function adicionar(\Usuario $entidade) {
      include("../model/util/connection.php");
      ob_start();
      $result = mysql_query(" INSERT INTO usuario (nome, email, senha) values ('" . $entidade->getNome() . "','" . $entidade->getEmail() . "','" . $entidade->getSenha() . "')");
    }

    public function pesquisar(\Usuario $entidade) {


        include_once 'model/util/connection.php';
        ob_start();
        $dados = mysql_query(" SELECT * FROM usuario  WHERE id_usuario = ".$entidade->getId_usuario()."");
        while ($sql = mysql_fetch_array($dados)) {
            $id = $sql['id_usuario'];
            $nome = $sql['nome'];
            $email = $sql['email'];
            $senha = $sql['senha'];
            $usuario = new Usuario($id, $nome, $email, $senha);
            return $usuario;
        }
    }

    public function remover(\Usuario $entidade) {

        include("../model/util/connection.php");
        ob_start();
        $result = mysql_query("DELETE  FROM usuario  WHERE id_usuario =" . $entidade->getId_usuario() . "");
    }

    public function editar(\Usuario $entidade) {

        include("../model/util/connection.php");
        ob_start();
        $result = mysql_query("UPDATE usuario  SET nome_usuario ='" . $entidade->getNome() . "',email_usuario ='" . $entidade->getEmail() . "',senha_usuario = '" . $entidade->getSenha() . "' WHERE id_usuario = ");
    }

    public function listar() {
        
    }

}
