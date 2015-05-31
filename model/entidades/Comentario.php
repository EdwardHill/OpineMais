<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comentario
 *
 * @author Jackson
 */
class Comentario {
    private $id_comentario;
    private $mensagem;
    private $qualificacao;
    private $nota;
    private $usuario; //Usuario que fez o comentario (1 comentario para cada produto)
    private $produto; //produto ao qual o comentario pertence
    private $respostas; //resposta dada por outros usuários ao seu comentario.
    
    public function __construct($id_comentario="",$mensagem="",$qualificacao="",$nota="",$usuario="",$produto="",$respostas="") {
        $this->id_comentario = $id_comentario;
        $this->mensagem = $mensagem;
        $this->qualificacao = $qualificacao;
        $this->nota = $nota;
        $this->usuario = $usuario;
        $this->produto = $produto;
        $this->respostas = $respostas;
    }
    
    public function getId_comentario(){
        return $this->id_comentario;
    }
    
    public function setId_comentario($comentario){
        $this->id_comentario = $comentario;
    }
    
    public function getMensagem(){
        return $this->mensagem;
    }
    
    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }
    
    public function getQualificacao(){
        return $this->qualificacao;
    }
    
    public function setQualificacao($qualificacao){
        $this->qualificacao = $qualificacao;
    }
    
    public function getNota(){
        return $this->nota;
    }
    
    public function setNota($nota){
        $this->nota = $nota;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    public function getProduto(){
        return $this->produto;
    }
    
    public function setProduto($produto){
        $this->produto = $produto;
    }
    
    public function getRespostas(){
        return $this->respostas;
    }
    
    public function setRespostas($respostas){
        $this->respostas = $respostas;
    }
}
