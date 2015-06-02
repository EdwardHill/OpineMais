<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fachada
 *
 * @author ivan
 */
class Fachada {
    
    private static $instance = null;
    private $controladorUsuario;
    private $controladorProduto;
    private $controladorOpiniao;
    private $controladorComentario;
    
    public function __construct() {
        $this->controladorUsuario = new ControladorUsuario();
        $this->controladorProduto = new ControladorProduto();
        $this->controladorOpiniao = new ControladorOpiniao();
        $this->controladorComentario = new ControladorComentario();
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    //METODOS DE USUARIO
    
    public function adicionarUsuario($entidade){
        $this->controladorUsuario->adicionarUsuario($entidade);
    }
    
    public function editarUsuario($entidade){
        $this->controladorUsuario->editarUsuario($entidade);
    }
    
    public function removerUsuario($entidade){
        $this->controladorUsuario->removerUsuario($entidade);
    }
    
    public function listarUsuario(){
        return $this->controladorUsuario->listarUsuario();
    }
    
    public function pesquisarUsuario($entidade){
        return $this->controladorUsuario->pesquisarUsuario($entidade);
    }

    //METODOS DE PRODUTO
   
    public function adicionarProduto($entidade){
        $this->controladorProduto->adicionarProduto($entidade);
    }
    
    public function editarProduto($entidade){
        $this->controladorProduto->editarProduto($entidade);
    }
    
    public function removerProduto($entidade){
        $this->controladorProduto->removerProduto($entidade);
    }
    
    public function listarProduto(){
        return $this->controladorProduto->listarProduto();
    }
    
    public function pesquisarProduto($entidade){
        return $this->controladorProduto->pesquisarProduto($entidade);
    }    
    
    //METODOS DE OPINIAO
    
    public function adicionarOpiniao($entidade){
        $this->controladorOpiniao->adicionarOpiniao($entidade);
    }
    
    public function editarOpiniao($entidade){
        $this->controladorOpiniao->editarOpiniao($entidade);
    }
    
    public function removerOpiniao($entidade){
        $this->controladorOpiniao->removerOpiniao($entidade);
    }
    
    public function listarOpiniao(){
        return $this->controladorOpiniao->listarOpiniao();
    }
    
    public function pesquiasrOpiniao($entidade){
        return $this->controladorOpiniao->pesquisarOpiniao($entidade);
    }
    
    //METODOS DE COMENTARIO
    
    public function adicionarComentario($entidade){
        $this->controladorComentario->adicionarComentario($entidade);
    }
    
    public function editarComentario($entidade){
        $this->controladorComentario->editarComentario($entidade);
    }
    
    public function removerComentario($entidade){
        $this->controladorComentario->removerComentario($entidade);
    }
    
    public function listarComentario(){
        return $this->controladorComentario->listarComentario();
    }
    
    public function pesquisarComentario($entidade){
        return $this->controladorComentario->pesquisarComentario($entidade);
    }
}
