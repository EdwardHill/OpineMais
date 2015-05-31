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
    private $qualificacao_positiva;
    private $qualificacao_negativa;
    private $nota_media;
    private $usuario; //usuário que criou o produto
    private $comentarios; //comentários para o produto 
    
    public function __construct($id_produto="",$titulo="",$detalhes="",$imagem="",$qualificacao_positiva="",
            $qualificacao_negativa="",$nota_media="",$usuario="",$comentarios="") {
        $this->id_produto= $id_produto;
        $this->titulo = $titulo;
        $this->detalhes = $detalhes;
        $this->imagem = $imagem;
        $this->qualificacao_positiva = $qualificacao_positiva;
        $this->qualificacao_negativa = $qualificacao_negativa;
        $this->nota_media = $nota_media;
        $this->usuario = $usuario;
        $this->comentarios = $comentarios;
    }


    public function getId_produto(){
        return $this->id_produto;
    }
    
    public function setId_produto($id_produto){
        $this->id_produto = $id_produto;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function setTitulo($titulo){
        $this->titulo = $titulo;
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
    
    public function getComentarios(){
        $this->comentarios;
    }
    
    public function setComentarios($comentarios){
        $this->comentarios = $comentarios;
    }
}
