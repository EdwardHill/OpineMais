<?php
session_start();
include('../imports.php');
include ('../model/util/connection.php');
        $usu = new Usuario();
        $id_usuario = $_SESSION["id_usuario"];
        $usu->setId_usuario($id_usuario);
        $fachada = Fachada::getInstance();
        $usu2 = $fachada->pesquisarUsuario($usu);
        $nome = $usu2->getNome();
        $email = $usu2->getEmail();

        header("Location:../perfil.php?nome=$nome&email=$email");
