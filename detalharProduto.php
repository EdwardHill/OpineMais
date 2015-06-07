<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comentar Produto - Opine Mais </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcut icon" href="images/logtop.png" />

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/funcao.js"></script>
        <script type="text/javascript">
            jQuery(function() {
                jQuery('form.rating').rating();
            });</script>
    </head>
    <body>

        <div class="main">
            <?php session_start();?>
            <?php include("header.php"); ?>
            <?php include("leftBar.php"); ?>
            <?php include_once('imports.php'); ?>
            <?php 
                $id_produto = $_REQUEST['id_produto'];

                $produto = new Produto();
                $produto->setId_produto($id_produto);

                $fachada = Fachada::getInstance();
                $produto = $fachada->pesquisarProduto($produto);
                
                if(empty($produto)){
                    header('Location:home.php');
                }
                if(!empty($_SESSION['usuario'])){
                    $serializacao = $_SESSION['usuario'];
                    $usuario = unserialize($serializacao);
                }
            ?>


            <div id="geral">

                <header class="major">
                    <!-- <h3>Opine</h3> -->
                </header>
                    <div class="postagem">

                        <h3><?php echo $produto->getNome_produto(); ?></h3>
                        <div><img src="images/upload/<?php echo $produto->getImagem(); ?>" class="imagem" style="width:75%;"/></div>
                        <img src="css/images/user.png" alt="Foto de Usuario"  style="width:2.2em;" />
                        <b><?php echo $produto->getUsuario()->getNome(); ?></b>
                        <?php 
                            if(!empty($_SESSION['usuario'])){
                                if($usuario->getId_usuario() == $produto->getUsuario()->getId_usuario()){
                                    echo  '<div align="left"><a href="editarProduto.php?id_produto='.$produto->getId_produto().'">'
                                        . 'Editar <img src="images/icon_editar.png"  id="postagem" alt="editar"/></a>'
                                        . ' '
                                        . '<a href="control/excluirProdutoControl.php?id_produto='.$produto->getId_produto().'">'
                                        . 'Editar <img src="images/icon_excluir.png"  id="postagem" alt="excluir"/></a></div>';
                                }
                            }
                        ?>
                        <p>
                            <b>Descrição:</b> <br/>
                            <?php echo $produto->getDetalhes(); ?>
                        </p>
                        
                        
                        <div id="opiniao">
                        <?php 
                            if(!empty($_SESSION['usuario'])){
                        ?>  
                            <h4>Opine sobre o produto</h4>
                                
                                <form action="control/cadastrarOpiniaoControl.php" method="post" name="form1" id="opiniao">
                                    <input type="hidden" name="id_produto" value="<?php echo $produto->getId_produto();?>" />
                                    
                                    <img src="images/bom.png"  id="opiniao" alt="bom"/><?php echo Qualificacao::BOM;?>
                                    <input type="radio" name="qualificacao" value="<?php echo Qualificacao::BOM;?>"> 
                                    <img src="images/ruim.png"  id="opiniao" alt="ruim"/><?php echo Qualificacao::RUIM;?>
                                    <input type="radio" name="qualificacao" value="<?php echo Qualificacao::RUIM;?>">
                                    <br/>   
                                    <input type="text" name="mensagem" size="50" value="Digite sua opinião" class="campo"/>
                                    <div align="right"><input type="submit" value="Enviar"></div>
                                        <!--<input type="submit" name="botao" style="display:none" />-->
                                </form>
                            
                            <div class="comentarios" id="<?php echo $id_opiniao; ?>">
                        <?php
                            }
                            
                            if(!empty($produto->getOpinioes())){
                                
                                echo '<h4 align=center>Opiniões</h4>';
                                
                                foreach ($produto->getOpinioes() as $opiniao){
                        ?>

                            
                                    <strong>
                                        <img src="css/images/user.png" alt="Foto de Usuario"  style="width:2.2em;" />
                                        <?php 
                                            echo $opiniao->getUsuario()->getNome()
                                                    .'<br/>Qualificacao: '.$opiniao->getQualificacao(); 
                                        ?>
                                        <p><?php echo $opiniao->getMensagem(); ?></p>
                                    </strong>


                                    <div id="comentario">
                                    <?php
                                        if(!empty($opiniao->getComentarios())){
                                            foreach ($opiniao->getComentarios() as $comentario){
                                    ?> 

                                                <div class="respostas" id="id_resposta<?php echo $comentario->getId_comentario(); ?>">
                                                    <img src="css/images/user.png" alt="Foto de Usuario"  style="width:2.2em;" />
                                                    <strong><?php echo $comentario->getUsuario()->getNome(); ?></strong>
                                                    <p><?php echo $comentario->getMensagem(); ?></p>
                                                </div>
                                    <?php 
                                            }
                                        }else{
                                            echo '<div align="center">Nenhum comentario sobre essa opinião</div>';
                                        }
                                        
                                        if(!empty($_SESSION['usuario'])){
                                    ?>

                                        <form action="control/cadastrarComentarioControl.php" method="post" name="form_comentario" id="form_comentario" style="padding:10px;">
                                            <input type="hidden" name="id_opiniao" value="<?php echo $opiniao->getId_opiniao(); ?>" />
                                            <input type="hidden" name="id_produto" value="<?php echo $produto->getId_produto(); ?>" />
                                            <h4>Comente a opinião:</h4>
                                            <input type="text" name="mensagem" value="Digite seu comentario sobre a opinião" class="campo" size="50"/>

                                            <input type="submit" name="botao_respostas" style="display:none" />
                                        </form>
                                    </div><!--id comentario-->
                        
                        <?php 
                                        }
                                
                                } //Final do foreath de opinioes
                                
                            } else{
                                echo '<div align="center">Nenhum opiniao sobre o produto</div>';
                            }
                        ?>
                            </div><!--classe opiniao-->
                        </div><!--id opiniao-->
                    </div><!--classe postagem-->
            <?php
                include 'model/util/reg_comentario.php';
                include 'model/util/reg_resposta.php';
            ?>

            </div><!--geral-->
        </div>

<!--
</div>
</div>
-->
    </body>
</html>


                                <!--<span class="abre_respostas">Respostas</span>-->
                                <?php
//                                if (!empty($_GET['id_opiniao'])) {
//                                    if ($_GET['id_opiniao'] == $id_opiniao) {
//                                        echo '<div id="comentarios" style="display:block">';
//                                    } else {
//                                        echo '<div id="comentarios">';
//                                    }
//                                } else {
//                                    echo '<div id="comentarios">';
//                                }
                                ?>