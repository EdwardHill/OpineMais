<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of RepositorioUsuario
 *
 * @author Edward_Hill
 */
class RepositorioUsuario implements IRepositorio{
    
    public function adicionar(\Usuario $entidade) {
        
      $nome = $entidade->getNome();
      $email = $entidade->getEmail();
      $senha = $entidade->getSenha();
      
     include("../util/connection.php");
    $result = mysql_query("insert into usuario(nome,email_usuario,senha_usuario,telefone_usuario) values ('$nome','$email','$senha','$telefone')");
    session_start();
    $_SESSION["mensagem"] = "Usuário Cadastrado!";
	header('Location:../index.php');
     
    }
    
      public function pesquisar(\Usuario $entidade) {
        
         if($entidade->getId_usuario()>0){ 
       include("../util/connection.php");
           $id = $entidade->getId_usuario();
           
           $dados = mysql_query(" SELECT *  FROM usuario  WHERE id_usuario = '"+$id+"'");
                           while( $sql = mysql_fetch_array($dados)){
                                $id = $sql['id_usuario'];
                               $nome = $sql['nome_usuario'];
			       $email = $sql['email_usuario'];
                               $telefone = $sql['telefone_usuario'];
                               $senha  = $sql['senha_usuario'];
                               $usuario = new Usuario($id, $nome, $email, $senha, $telefone); 
                                return $usuario;
                           }
 
         }
        
        
    }
    
    public function remover(\Usuario $entidade) {
        
        include("../util/connection.php");        
        $result = mysql_query("DELETE  ON usuario  WHERE id_usuario ='" + $entidade->getId_usuario()+"'");
    }
    
    public function editar(\Usuario $entidade) {
        
        include("../util/connection.php");
        $result = mysql_query("UPDATE usuario  SET nome_usuario ='" + $entidade->getNome()+"',email_usuario ='"+$entidade->getEmail()+"',senha_usuario = '"+ $entidade->getSenha()+"'");
        
    }

    public function listar(\Usuario $entidade) {
        
    }

}
