<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepositorioComentario
 *
 * @author Jackson
 */
//include("../model/util/connection.php");
//include('../model/dados/IRepositorioComentario.php');
class RepositorioComentario implements IRepositorioComentario{

    private static $instance = null;

    public function __construct() {

    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function adicionarComentario(\Comentario $comentario) {
        $result = mysql_query("insert into comentario(mensagem) "
            . "values ('".$comentario->getMensagem()."')");

        $id_comentario = mysql_insert_id();
        $id_usuario = $comentario->getUsuario()->getId_usuario();
        $id_opiniao = $comentario->getOpiniao()->getId_opiniao();

        $result = mysql_query("insert into comentario_opiniao_usuario "
                . "(id_usuario,id_opiniao,id_comentario)"
                . "values ($id_usuario,$id_opiniao,$id_comentario)");
    }

    public function editarComentario(\Comentario $comentario) {
        $result = mysql_query("update comentario set "
                . "mensagem = '".$comentario->getMensagem()."' "
                . "where id_comentario = ".$entidade->getId_comentario());
    }

    public function listarComentario() {
        $result = mysql_query('select c.*,cou.* from comentario c,comentario_opiniao_usuario cou where c.id_comentario = cou.id_comentario');

        $arrayComentario = array();
        while($row = mysql_fetch_array($result)){
            $id_comentario = $row['c.id_comentario'];
            $mensagem = $row['c.mensagem'];
            $id_usuario = $row['cou.id_usuario'];
            $id_opiniao = $row['cou.id_opiniao'];
            
            $usuario = new Usuario($id_usuario);
            $opiniao = new Opiniao($id_opiniao);

            $comentario = new Comentario($id_comentario, $mensagem, $usuario, $opiniao);

            array_push($arrayComentario, $comentario);
        }
        return $arrayComentario;

    }

    public function pesquisarComentario(\Comentario $comentario) {
        $result = mysql_query('select c.*,cou.* from '
                . 'comentario c,comentario_opiniao_usuario cou '
                . 'where c.id_comentario = '.$comentario->getId_comentario().' cou.id_comentario = '.$comentario->getId_comentario());
        $comentario = null;
        while($row = mysql_fetch_array($result)){
            $id_comentario = $row['c.id_comentario'];
            $mensagem = $row['c.mensagem'];
            $id_usuario = $row['cou.id_usuario'];
            $id_opiniao = $row['cou.id_opiniao'];
            
            $usuario = new Usuario($id_usuario);
            $opiniao = new Opiniao($id_opiniao);

            $comentario = new Comentario($id_comentario, $mensagem, $usuario, $opiniao);
        }
        
        return $comentario;
    }

    public function removerComentario(\Comentario $comentario) {
        $result = mysql_query('delete from comentario where id_comentario = '.$comentario->getId_comentario());
    }

    public function listarComentariosPorOpiniao(\Opiniao $opiniao){
        $result = mysql_query('select c.*,cou.* from '
                . 'comentario c,comentario_opiniao_usuario cou '
                . 'where c.id_comentario = cou.id_comentario and '
                . 'cou.id_opiniao = '.$opiniao->getId_opiniao());
        $arrayComentario = array();
        while($row = mysql_fetch_array($result)){
            $id_comentario = $row['c.id_comentario'];
            $mensagem = $row['c.mensagem'];
            $id_usuario = $row['cou.id_usuario'];
            $id_opiniao = $row['cou.id_opiniao'];
            
            $usuario = new Usuario($id_usuario);
            $opiniao = new Opiniao($id_opiniao);
            $comentario = new Comentario($id_comentario, $mensagem, $usuario, $opiniao);

            array_push($arrayComentario, $comentario);
        }
        
        return $arrayComentario;

    }
}
