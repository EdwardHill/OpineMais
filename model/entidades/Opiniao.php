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
class Opiniao {
    private $id_opiniao;
    private $mensagem;
    private $qualificacao;
    private $nota;
    private $usuario; //Usuario que deu sua opiniao sobre o produto
    private $produto; //produto ao qual a opiniao foi criada
    private $comentarios; //comentarios sobre a opiniao so usuario.
    
    public function __construct($id_opiniao="",$mensagem="",$qualificacao="",$nota="",$usuario="",$produto="",$comentarios="") {
        $this->id_opiniao = $id_opiniao;
        $this->mensagem = $mensagem;
        $this->qualificacao = $qualificacao;
        $this->nota = $nota;
        $this->usuario = $usuario;
        $this->produto = $produto;
        $this->comentarios = $comentarios;
    }
    
    public function getId_opiniao(){
        return $this->id_opiniao;
    }
    
    public function setId_opiniao($opiniao){
        $this->id_opiniao = $opiniao;
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
    
    public function getComentarios(){
        return $this->comentarios;
    }
    
    public function setComentarios($comentarios){
        $this->comentarios = $comentarios;
    }
}
