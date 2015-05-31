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
    private $nome_produto;
    private $detalhes;
    private $imagem;
    private $qualificacao_positiva;
    private $qualificacao_negativa;
    private $nota_media;
    private $usuario; //usuário que criou o produto
    private $opinioes; //Opiniões sobre o produto
    
    public function __construct($id_produto="",$nome_produto="",$detalhes="",$imagem="",$qualificacao_positiva="",
            $qualificacao_negativa="",$nota_media="",$usuario="",$opinioes="") {
        $this->id_produto= $id_produto;
        $this->nome_produto = $nome_produto;
        $this->detalhes = $detalhes;
        $this->imagem = $imagem;
        $this->qualificacao_positiva = $qualificacao_positiva;
        $this->qualificacao_negativa = $qualificacao_negativa;
        $this->nota_media = $nota_media;
        $this->usuario = $usuario;
        $this->opinioes = $opinioes;
    }


    public function getId_produto(){
        return $this->id_produto;
    }
    
    public function setId_produto($id_produto){
        $this->id_produto = $id_produto;
    }
    
    public function getNome_produto(){
        return $this->nome_produto;
    }
    
    public function setNome_produto($nome_produto){
        $this->nome_produto = $nome_produto;
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
    
    public function getQualificacao_positiva(){
        return $this->qualificacao_positiva;
    }

    public function setQualificacao_positiva($qualificacao_positiva){
        $this->qualificacao_positiva = $qualificacao_positiva;
    }
    
    public function getQualificacao_negativa(){
        return $this->qualificacao_negativa;
    }

    public function setQualificacao_negativa($qualificacao_negativa){
        $this->qualificacao_negativa = $qualificacao_negativa;
    }
    public function getNota_media(){
        return $this->nota_media;
    }

    public function setNota_media($nota_media){
        $this->nota_media = $nota_media;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    public function getOpinioes(){
        $this->opinioes;
    }
    
    public function setOpinioes($opinioes){
        $this->opinioes = $opinioes;
    }
}
