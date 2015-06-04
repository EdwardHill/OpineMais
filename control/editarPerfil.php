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
 session_start();
 include('../imports.php');
   $usu = new Usuario();
   $id_usuario = $_SESSION["id_usuario"];
   $usu->setId_usuario($id_usuario);
   $fachada = Fachada::getInstance();
   $usu2 = $fachada->pesquisarUsuario($usu);
   $nome = $usu2->getNome();
   $email = $usu2->getEmail();

   header("Location:../editarPerfil.php?nome=$nome&email=$email");
