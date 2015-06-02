<?php

include('../imports.php');
        $usu = new Usuario();
        $usu->setId_usuario(19);
        $fachada = Fachada::getInstance();
        $usu2 = $fachada->pesquisarUsuario($usu);
        $nome = $usu2->getNome();
        $email = $usu2->getEmail();  

       header('Location:../perfil.php?nome=<?php echo $nome?>');
