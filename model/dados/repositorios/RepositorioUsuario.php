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
      $result = mysql_query(" insert into usuario (nome, email, senha, foto_perfil, status) values "
              . "('" . $usuario->getNome() . "','" . $usuario->getEmail() . "','" . $usuario->getSenha() . "', "
              . "'".$usuario->getFoto_perfil()."', '".Status::ATIVO."')");
      return mysql_insert_id();
    }

    public function editarUsuario(\Usuario $usuario) {
        $result = mysql_query("update usuario set nome = "
                . "'" . $usuario->getNome() . "',email = '" . $usuario->getEmail() . "',senha = '" . $usuario->getSenha() . "' "
                . "foto_perfil = '".$usuario->getFoto_perfil()."' "
                . "where id_usuario = ".$usuario->getId_usuario());
    }
    public function pesquisarUsuario(\Usuario $usuario) {
        $result = mysql_query("select * from usuario where id_usuario = ".$usuario->getId_usuario());
        
        while ($row = mysql_fetch_array($result)) {
            $id_usuario = $row['id_usuario'];
            $nome = $row['nome'];
            $email = $row['email'];
            $senha = $row['senha'];
            $foto_perfil = $row['foto_perfil'];

            $usuario = new Usuario($id_usuario, $nome, $email, $senha, $foto_perfil);
        }
        return $usuario;
    }

    public function removerUsuario(\Usuario $usuario) {
        $result = mysql_query("update usuario set nome = "
                . "'" . $usuario->getNome() . "',email = '" . $usuario->getEmail() . "',senha = '" . $usuario->getSenha() . "', "
                . "foto_perfil = '".$usuario->getFoto_perfil()."', status = '".Status::INATIVO."' "
                . "where id_usuario = ".$usuario->getId_usuario());
    }

    public function listarUsuario() {
        $result = mysql_query("select * from usuario");
        $arrayUsuarios = array();
        while ($sql = mysql_fetch_array($result)) {
            $id_usuario = $sql['id_usuario'];
            $nome = $sql['nome'];
            $email = $sql['email'];
            $senha = $sql['senha'];
            $foto_perfil = $row['foto_perfil'];

            $usuario = new Usuario($id_usuario, $nome, $email, $senha, $foto_perfil);
            array_push($arrayUsuario, $usuario);
        }
        return $arrayUsuario;
    }

}
