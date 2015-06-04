<?php

 function login($email,$senha) {
     $result = mysql_query(" SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'");
        $usuario = null;  
        while($sql = mysql_fetch_array($result)){
            
            $nome = $sql['nome'];
            $email = $sql['email'];
            $id = $sql['id'];
            $usuario = new Usuario($id_usuario, $nome, $email, $senha);
        }
        return $usuario;
    }
   