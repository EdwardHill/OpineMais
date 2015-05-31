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
class Resposta {
    private $id_resposta;
    private $mensagem;
    private $usuario;
    private $comentario;
    
    public function __construct($id_resposta="",$mensagem="",$usuario="",$comentario="") {
        $this->id_resposta = $id_resposta;
        $this->mensagem = $mensagem;
        $this->usuario  = $usuario;
        $this->comentario = $comentario;
    }
    
    public function getIs_resposta(){
        return $this->id_resposta;
    }
    
    public function setId_resposta($id_resposta){
        $this->id_resposta = $id_resposta;
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
    
    public function getComentario(){
        return $this->comentario;
    }
    
    public function setComentario($comentario){
        $this->comentario = $comentario;
    }
}
