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
    private $produto; //produto ao qual o comentario pertence
    
    public function __construct($id_comentario="",$mensagem="",$classificacao="",$nota="",$produto="") {
        $this->id_comentario = $id_comentario;
        $this->mensagem = $mensagem;
        $this->classificacao = $classificacao;
        $this->nota = $nota;
        $this->produto = ;
        
    }
}
