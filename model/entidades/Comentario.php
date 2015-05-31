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
}
