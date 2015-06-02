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
include_once ('../imports.php');
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
    //**************************************************************************
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
    
    //**************************************************************************
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
        $listaProdutos = $this->controladorProduto->listarProduto();
        
        foreach ($listaProdutos as $produto){
            $opinioes = $this->listarOpinioesPorProduto($produto);
            $usuario = $this->pesquisarUsuario($produto->getUsuario());
            $produto->setOpinioes($opinioes);
            $produto->setUsuario($usuario);
        }
        
        return $listaProdutos;
    }
    
    public function pesquisarProduto(\Produto $entidade){
        $entidade = $this->controladorProduto->pesquisarProduto($entidade);
        
        $opinioes = $this->listarOpinioesPorProduto($entidade);
        $usuario = $this->pesquisarUsuario($entidade->getUsuario());
        
        $entidade->setOpinioes($opinioes);
        $entidade->setUsuario($usuario);
        
        return $entidade;
    }    
    
    //**************************************************************************
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
        $listaOpinioes = $this->controladorOpiniao->listarOpiniao();
        
        foreach ($listaOpinioes as $opiniao){
            $comentarios = $this->listarComentariosPorOpiniao($opiniao);
            $usuario = $this->pesquisarUsuario($opiniao->getUsuario());
            $opiniao->setComentarios($comentarios);
            $opiniao->setUsuario($usuario);
        }
        
        return $listaOpinioes;
        
    }
    
    public function pesquiasrOpiniao(\Opiniao $entidade){
        $entidade = $this->controladorOpiniao->pesquisarOpiniao($entidade);
        
        $comentarios = $this->listarComentariosPorOpiniao($entidade);
        $usuario = $this->pesquisarUsuario($entidade->getUsuario());
        $entidade->setComentarios($comentarios);
        $entidade->setUsuario($usuario);
        
        return $entidade;
    }
    
    private function listarOpinioesPorProduto(\Produto $entidade){
        $listaOpinioes = $this->controladorOpiniao->listarOpinioesPorProduto($entidade);
        
        foreach ($listaOpinioes as $opiniao){
            $comentarios = $this->listarComentariosPorOpiniao($opiniao);
            $usuario = $this->pesquisarUsuario($opiniao->getUsuario());
            $opiniao->setComentarios($comentarios);
            $opiniao->setUsuario($usuario);
        }
        
        return $listaOpinioes;
//        $arrayOpinioes = array();
//        $produto = new Produto();
//        
//        $arrayOpinioes = $this->controladorOpiniao->ListarOpinioesPorProduto($entidade);
//        if($arrayOpinioes != null){
//            foreach ($opiniao as $arrayOpinioes){
//                $produto = $this->pesquisarProduto($entidade->getId_produto());
//                $produto->setOpinioes($opiniao);
//            }
//        }
//        return $arrayOpinioes;
    }

    //**************************************************************************
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
        $listaComentarios = $this->controladorComentario->listarComentario();
        
        foreach ($listaComentarios as $comentario){
            $usuario = $this->pesquisarUsuario($comentario->getUsuario());
            $comentario->setUsuario($usuario);
        }
        
        return $listaComentarios;
    }
    
    public function pesquisarComentario(\Comentario $entidade){
        $entidade = $this->controladorComentario->pesquisarComentario($entidade);
        
        $usuario = $this->pesquisarUsuario($entidade->getUsuario());
        $entidade->setUsuario($usuario);
        
        return $entidade;
    }
    
    private function listarComentariosPorOpiniao(\Opiniao $entidade){
        $listaComentarios = $this->controladorComentario->listarComentariosPorOpiniao($entidade);
        
        foreach ($listaComentarios as $comentario){
            $usuario = $this->pesquisarUsuario($comentario->getUsuario());
            $comentario->setUsuario($usuario);
        }
        
        return $listaComentarios;
    }
}
