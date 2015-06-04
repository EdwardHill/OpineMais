<?php

include('../imports.php');
include ('../model/util/connection.php');
        $usu = new Usuario();
        $usu->setId_usuario(6);
        $fachada = Fachada::getInstance();
        $usu2 = $fachada->pesquisarUsuario($usu);
        $nome = $usu2->getNome();
        $email = $usu2->getEmail();

        header("Location:../perfil.php?nome=$nome&email=$email");
