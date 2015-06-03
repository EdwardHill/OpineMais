<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Jackson
 */
interface IRepositorioComentario {
    //put your code here
    public function adicionarComentario(\Comentario $comentario);
    public function editarComentario(\Comentario $comentario);
    public function removerComentario(\Comentario $comentario);
    public function pesquisarComentario(\Comentario $comentario);
    public function listarComentario();
    public function listarComentariosPorOpiniao(\Opiniao $opiniao);
}
