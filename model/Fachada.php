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
    
    public function adicionarUsuario(\Usuario $entidade){
        $this->controladorUsuario->adicionarUsuario($entidade);
    }
    
    public function editarUsuario(\Usuario $entidade){
        $this->controladorUsuario->editarUsuario($entidade);
    }
    
    public function removerUsuario(\Usuario $entidade){
        $this->controladorUsuario->removerUsuario($entidade);
    }
    
    public function listarUsuario(){
        return $this->controladorUsuario->listarUsuario();
    }
    
    public function pesquisarUsuario(\Usuario $entidade){
        return $this->controladorUsuario->pesquisarUsuario($entidade);
    }

    //METODOS DE PRODUTO
   
    public function adicionarProduto(\Produto $entidade){
        $this->controladorProduto->adicionarProduto($entidade);
    }
    
    public function editarProduto(\Produto $entidade){
        $this->controladorProduto->editarProduto($entidade);
    }
    
    public function removerProduto(\Produto $entidade){
        $this->controladorProduto->removerProduto($entidade);
    }
    
    public function listarProduto(){
        return $this->controladorProduto->listarProduto();
    }
    
    public function pesquisarProduto(\Produto $entidade){
        return $this->controladorProduto->pesquisarProduto($entidade);
    }    
    
    //METODOS DE OPINIAO
    
    public function adicionarOpiniao(\Opiniao $entidade){
        $this->controladorOpiniao->adicionarOpiniao($entidade);
    }
    
    public function editarOpiniao(\Opiniao $entidade){
        $this->controladorOpiniao->editarOpiniao($entidade);
    }
    
    public function removerOpiniao(\Opiniao $entidade){
        $this->controladorOpiniao->removerOpiniao($entidade);
    }
    
    public function listarOpiniao(){
        return $this->controladorOpiniao->listarOpiniao();
    }
    
    public function pesquiasrOpiniao(\Opiniao $entidade){
        return $this->controladorOpiniao->pesquisarOpiniao($entidade);
    }
    
    public function ListarOpinioesPorProduto(\Produto $entidade){
        return $this->controladorOpiniao->ListarOpinioesPorProduto($entidade);
    }


    //METODOS DE COMENTARIO
    
    public function adicionarComentario(\Comentario $entidade){
        $this->controladorComentario->adicionarComentario($entidade);
    }
    
    public function editarComentario(\Comentario $entidade){
        $this->controladorComentario->editarComentario($entidade);
    }
    
    public function removerComentario(\Comentario $entidade){
        $this->controladorComentario->removerComentario($entidade);
    }
    
    public function listarComentario(){
        return $this->controladorComentario->listarComentario();
    }
    
    public function pesquisarComentario(\Comentario $entidade){
        return $this->controladorComentario->pesquisarComentario($entidade);
    }
    
    public function listarComentariosPorOpiniao(\Opiniao $entidade){
        return $this->controladorComentario->listarComentariosPorOpiniao($entidade);
    }
}
