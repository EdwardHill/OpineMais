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
    
    public function __construct($id_comentario="",$mensagem="",$usuario="",$opiniao="") {
        $this->id_comentario = $id_comentario;
        $this->mensagem = $mensagem;
        $this->usuario  = $usuario;
        $this->opiniao = $opiniao;
    }
    
    public function getIs_comentario(){
        return $this->id_comentario;
    }
    
    public function setId_comentario($id_comentario){
        $this->id_comentario = $id_comentario;
    }
    
    public function getMensagem(){
        return $this->mensagem;
    }
    
    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    public function getOpiniao(){
        return $this->opiniao;
    }
    
    public function setOpiniao($opiniao){
        $this->opiniao = $opiniao;
    }
}
