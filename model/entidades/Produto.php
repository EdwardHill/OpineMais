<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 * @author Edward_Hill
 */
class Produto {
    private $id_produto;
    private $titulo;
    private $detalhes;
    private $imagem;
    private $qualificacao_geral;
    private $nota_geral;
    private $usuario; //usuário ao qual o produto pertence
    private $comentarios; //comentários para produto 
    
    public function __construct($id_produto="",$descricao="",$detalhes="",$imagem="",$usuario="") {
        $this->id_produto= $id_produto;
        $this->descricao = $descricao;
        $this->detalhes = $detalhes;
        $this->imagem = $imagem;
        $this->usuario = $usuario;
    }


    public function getId_produto(){
        return $this->id_produto;
    }
    
    public function setId_produto($id_produto){
        $this->id_produto = $id_produto;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
    public function getDetalhes(){
        return $this->detalhes;
    }
    
    public function setDetalhes($detalhes){
         $this->detalhes = $detalhes;
    }
    
    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($imagem){
        $this->imagem = $imagem;
    }
}
