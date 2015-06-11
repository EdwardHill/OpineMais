<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Edward_Hill
 */
class Usuario {

    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $foto_perfil;

    public function __construct($id_usuario = "", $nome = "", $email = "", $senha = "",$foto_perfil="user.png") {
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->foto_perfil = $foto_perfil;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    
    function getFoto_perfil() {
        return $this->foto_perfil;
    }

    function setFoto_perfil($foto_perfil) {
        $this->foto_perfil = $foto_perfil;
    }



}
