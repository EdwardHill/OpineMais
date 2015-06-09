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
    private $positivo;
    private $negativo;
    
    public function __construct($opinioes) {
        $this->contador($opinioes);
    }
    public function getPositivo() {
        return $this->positivo;
    }

    public function getNegativo() {
        return $this->negativo;
    }
    
    private function contador($opinioes){
        $this->positivo=0;
        $this->negativo=0;
        if(!empty($opinioes)){
            foreach ($opinioes as $opiniao){
                if(Qualificacao::BOM == $opiniao->getQualificacao()){
                    $this->positivo++;
                }else if(Qualificacao::RUIM == $opiniao->getQualificacao()){
                    $this->negativo++;
                }
            }
        }
    }

}
