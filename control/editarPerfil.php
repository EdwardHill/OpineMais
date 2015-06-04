<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of editarPerfil
 *
 * @author Edward_Hill
 */
 include('../imports.php');
   $usu = new Usuario();
   $usu->setId_usuario(6);
   $fachada = Fachada::getInstance();
   $usu2 = $fachada->pesquisarUsuario($usu);
   $nome = $usu2->getNome();
   $email = $usu2->getEmail();

   header("Location:../editarPerfil.php?nome=$nome&email=$email");
