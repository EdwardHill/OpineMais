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
//include_once ('../imports.php');
class Fachada {
    
    private static $instance = null;
    private $controladorUsuario;
    private $controladorProduto;
    private $controladorOpiniao;
    private $controladorComentario;
    
    private function __construct() {
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
        return $this->controladorUsuario->adicionarUsuario( $entidade);
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
        if(!empty($listaProdutos)){
            foreach ($listaProdutos as $produto){
                $usuario = $this->pesquisarUsuario($produto->getUsuario());
                $produto->setUsuario($usuario);
                
                $opinioes = $this->listarOpinioesPorProduto($produto);
                if(!empty($opinioes)){
                    $produto->setOpinioes($opinioes);
//                    $contQualificacao = new ContQualificacao($opinioes);
//                    
//                    $produto->setQualificacao_positiva($contQualificacao->getPositivo());
//                    $produto->setQualificacao_negativa($contQualificacao->getNegativo());
                }
            }
        }
        
        return $listaProdutos;
    }
    
    public function pesquisarProduto(\Produto $entidade){
        $entidade = $this->controladorProduto->pesquisarProduto($entidade);
        if(!empty($entidade)){
            $usuario = $this->pesquisarUsuario($entidade->getUsuario());
            $entidade->setUsuario($usuario);
            
            $opinioes = $this->listarOpinioesPorProduto($entidade);
            if(!empty($opinioes)){
                $entidade->setOpinioes($opinioes);
                
//                $contQualificacao = new ContQualificacao($opinioes);
//                    
//                $entidade->setQualificacao_positiva($contQualificacao->getPositivo());
//                $entidade->setQualificacao_negativa($contQualificacao->getNegativo());
            }
        }
        return $entidade;
    }    
    
    //**************************************************************************
    //METODOS DE OPINIAO
    
    public function adicionarOpiniao(\Opiniao $entidade){
        $this->controladorOpiniao->adicionarOpiniao($entidade);
    }
    
    public function editarOpiniao(\Opiniao $opiniao){
        $this->controladorOpiniao->editarOpiniao($opiniao);
    }
    
    public function removerOpiniao(\Opiniao $entidade){
        $this->controladorOpiniao->removerOpiniao($entidade);
    }
    
    public function listarOpiniao(){
        $listaOpinioes = $this->controladorOpiniao->listarOpiniao();
        if(!empty($listaOpinioes)){
            foreach ($listaOpinioes as $opiniao){
                $usuario = $this->pesquisarUsuario($opiniao->getUsuario());
                $opiniao->setUsuario($usuario);
                
                $comentarios = $this->listarComentariosPorOpiniao($opiniao);
                if(!empty($comentarios)){
                    $opiniao->setComentarios($comentarios);
                }
            }
        }
        
        return $listaOpinioes;
        
    }
    
    public function pesquisarOpiniao(\Opiniao $entidade){
        $entidade = $this->controladorOpiniao->pesquisarOpiniao($entidade);
        if(!empty($entidade)){
            $usuario = $this->pesquisarUsuario($entidade->getUsuario());
            $entidade->setUsuario($usuario);
            
            $comentarios = $this->listarComentariosPorOpiniao($entidade);
            if(!empty($comentarios)){
                $entidade->setComentarios($comentarios);
            }
        }
        
        return $entidade;
    }
    
    private function listarOpinioesPorProduto(\Produto $entidade){
        $listaOpinioes = $this->controladorOpiniao->listarOpinioesPorProduto($entidade);
        if(!empty($listaOpinioes)){
            foreach ($listaOpinioes as $opiniao){
                $usuario = $this->pesquisarUsuario($opiniao->getUsuario());
                $opiniao->setUsuario($usuario);
                
                $comentarios = $this->listarComentariosPorOpiniao($opiniao);
                if(!empty($comentarios)){
                    $opiniao->setComentarios($comentarios);
                }
            }
        }
        return $listaOpinioes;
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
        if(!empty($listaComentarios)){
            foreach ($listaComentarios as $comentario){
                $usuario = $this->pesquisarUsuario($comentario->getUsuario());
                $comentario->setUsuario($usuario);
            }
        }
        
        return $listaComentarios;
    }
    
    public function pesquisarComentario(\Comentario $entidade){
        $entidade = $this->controladorComentario->pesquisarComentario($entidade);
        if(!empty($entidade)){
            $usuario = $this->pesquisarUsuario($entidade->getUsuario());
            $entidade->setUsuario($usuario);
        }
        return $entidade;
    }
    
    private function listarComentariosPorOpiniao(\Opiniao $entidade){
        $listaComentarios = $this->controladorComentario->listarComentariosPorOpiniao($entidade);
        if(!empty($listaComentarios)){
            foreach ($listaComentarios as $comentario){
                $usuario = $this->pesquisarUsuario($comentario->getUsuario());
                $comentario->setUsuario($usuario);
            }
        }
        
        return $listaComentarios;
    }
}
