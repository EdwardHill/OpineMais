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
    private $categoria;
    private $marca;
    private $usuario; //usuário que criou o produto
    private $opinioes; //Opiniões sobre o produto

    public function __construct($id_produto="",$nome_produto="",$detalhes="",$imagem="",$qualificacao_positiva=0,
            $qualificacao_negativa=0,$nota_media=0.0,$categoria="",$marca="",$usuario="",$opinioes="") {
        $this->id_produto= $id_produto;
        $this->nome_produto = $nome_produto;
        $this->detalhes = $detalhes;
        $this->imagem = $imagem;
        $this->qualificacao_positiva = $qualificacao_positiva;
        $this->qualificacao_negativa = $qualificacao_negativa;
        $this->nota_media = $nota_media;
        $this->categoria = $categoria;
        $this->marca = $marca;
        $this->usuario = $usuario;
        $this->opinioes = $opinioes;
    }
    
    function getId_produto() {
        return $this->id_produto;
    }

    function getNome_produto() {
        return $this->nome_produto;
    }

    function getDetalhes() {
        return $this->detalhes;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getQualificacao_positiva() {
        return $this->qualificacao_positiva;
    }

    function getQualificacao_negativa() {
        return $this->qualificacao_negativa;
    }

    function getNota_media() {
        return $this->nota_media;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getMarca() {
        return $this->marca;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getOpinioes() {
        return $this->opinioes;
    }

    function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    function setNome_produto($nome_produto) {
        $this->nome_produto = $nome_produto;
    }

    function setDetalhes($detalhes) {
        $this->detalhes = $detalhes;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setQualificacao_positiva($qualificacao_positiva) {
        $this->qualificacao_positiva = $qualificacao_positiva;
    }

    function setQualificacao_negativa($qualificacao_negativa) {
        $this->qualificacao_negativa = $qualificacao_negativa;
    }

    function setNota_media($nota_media) {
        $this->nota_media = $nota_media;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setOpinioes($opinioes) {
        $this->opinioes = $opinioes;
    }


    
}
