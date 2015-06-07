<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Resposta
 *
 * @author CA43002_CPD
 */
class Comentario {
    private $id_comentario;
    private $mensagem;
    private $usuario; // Usuario que comentou a opniao
    private $opiniao; // Opinião ao qual o comentário esta sendo feito
    
    function __construct($id_comentario=0, $mensagem="", $usuario="", $opiniao="") {
        $this->id_comentario = $id_comentario;
        $this->mensagem = $mensagem;
        $this->usuario = $usuario;
        $this->opiniao = $opiniao;
    }
    
    function getId_comentario() {
        return $this->id_comentario;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getOpiniao() {
        return $this->opiniao;
    }

    function setId_comentario($id_comentario) {
        $this->id_comentario = $id_comentario;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setOpiniao($opiniao) {
        $this->opiniao = $opiniao;
    }
}
