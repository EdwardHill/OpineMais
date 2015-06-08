<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContQualificacao
 *
 * @author Jackson
 */
 class ContQualificacao {
    //put your code here
    private $positivo=0;
    private $negativo=0;
    public function __construct($opiniões) {
        if(!empty($opiniões)){
            foreach ($opiniões as $opiniao){
                if(Qualificacao::BOM == $opiniao->getQualificacao()){
                    $positivo++;
                }
                if(Qualificacao::RUIM == $opiniao->getQualificacao()){
                    $negativo++;
                }
            }
        }
    }
    function getPositivo() {
        return $this->positivo;
    }

    function getNegativo() {
        return $this->negativo;
    }


}
