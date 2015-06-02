<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of imports
 *
 * @author Edward_Hill
 */

ob_start();

//Util
require 'model/util/Qualificacao.php';
require 'model/util/connection.php';
require 'model/util/logout.php';
require 'model/util/reg_comentario.php';
require 'model/util/reg_resposta.php';
require 'model/util/sessao.php';
require 'model/util/verificaSessao.php';
require 'model/util/upload.php';


//Entidades
require 'model/entidades/Comentario.php';
require 'model/entidades/Opiniao.php';
require 'model/entidades/Produto.php';
require 'model/entidades/Usuario.php';


//Repositorios
require 'model/repositorios/RepositorioUsuario.php';
require 'model/repositorios/RepositorioOpiniao.php';
require 'model/repositorios/RepositorioProduto.php';
require 'model/repositorios/RepositorioComentario.php';

//Comentarios
require 'model/controladores/ControladorProduto.php';
require 'model/controladores/ControladorOpiniao.php';
require 'model/controladores/ControladorUsuario.php';
require 'model/controladores/ControladorComentario.php';

//Fachada
require 'model/Fachada.php';



