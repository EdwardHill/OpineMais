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
    
    
    //METODOS DE PRODUTO
   
    
    //METODOS DE OPINIAO
    
    
    //METODOS DE COMENTARIO
}
