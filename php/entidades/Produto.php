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
    private $descricao;
    private $detalhes;
    private $imagem;
    
    public function __construct($id_produto="",$descricao="",$detalhes="",$imagem="") {
        $this->id_produto= $id_produto;
        $this->descricao = $descricao;
        $this->detalhes = $detalhes;
        $this->imagem = $imagem;
    }


    public function getId_produto(){
        return $this->id_produto;
    }
    public function getDescricao(){
    return $this->descricao;
}
    
    public function getDetalhes(){
    return $this->detalhes;
}
    
    public function getImagem(){
    return $this->imagem;
}

public function setId_produto($id_produto){
        $this->id_produto = $id_produto;
}
public function setDescicao($descricao){
        $this->descricao = $descricao;
}
 public function setDestalhes($destalhes){
     $this->detalhes = detalhes;
    
 }
 public function setImagem($imagem){
        $this->Imagem = $Imagem;
}
  }
