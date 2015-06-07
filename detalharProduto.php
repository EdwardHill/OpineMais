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
                        <h4>Descrição:</h4>
                        <p><?php echo $produto->getDetalhes(); ?></p>
                        <?php 
                            if($usuario->getId_usuario() == $produto->getUsuario()->getId_usuario()){
                                echo '<p>'
                                        . '<a href="editarProduto.php?id_produto='.$produtoUp->getId_produto().'">'
                                        . 'Editar <img src="images/icon_editar.png"  id="postagem" alt="editar"/></a>'
                                        . ' '
                                        . '<a href="control/excluirProdutoControl.php?id_produto='.$produtoUp->getId_produto().'">'
                                        . 'Editar <img src="images/icon_excluir.png"  id="postagem" alt="excluir"/></a>'
                                    . '</p>';
                            }
                              
                        ?>
                        
                        <div id="opiniao">
                        <?php 
                            if(!empty($_SESSION['usuario'])){
                        ?>    
                                <form action="control/cadastrarOpiniao.php" method="post" name="form1" id="opiniao">
                                    <input type="hidden" name="id_produto" value="<?php echo $produto->getId_produto();?>" />
                                    <p> 
                                        <img src="images/bom.png"  id="opiniao" alt="bom"/><?php echo Qualificacao::BOM;?>
                                        <input type="checkbox" name="qualificacao" value="<?php echo Qualificacao::BOM;?>"> 

                                        <img src="images/ruim.png"  id="opiniao" alt="ruim"/><?php echo Qualificacao::RUIM;?>
                                        <input type="checkbox" name="qualificacao" value="<?php echo Qualificacao::RUIM;?>">
                                    </p>   
                                    <p>
                                        <input type="text" name="mensagem" size="500" value="Digite seu comentário" class="campo"/>
                                    </p>
                                    <p><input type="submit" value="Enviar">
                                        <!--<input type="submit" name="botao" style="display:none" />-->
                                </form>
                            
                            <div class="comentarios" id="<?php echo $id_opiniao; ?>">
                        <?php
                            }
                            
                            if(!empty($produto->getOpinioes())){
                                foreach ($produto->getOpinioes() as $opiniao){
                        ?>

                            
                                <strong>
                                    <?php echo $opiniao->getUsuario()->getNome().'    Qualificacao: '.$opiniao->getQualificacao(); ?>
                                </strong>
                                <p><?php echo $opiniao->getMensagem(); ?></p>
                                
                                <div id="comentario">
                                    
                                
                                
                                    <div class="respostas" id="id_resposta<?php echo $id_resposta; ?>">
                                        <strong><?php echo $titulo_resposta; ?></strong>
                                        <p><?php echo $descricao_resposta; ?></p>
                                    </div>
                                <form action="" method="post" name="form_respostas" id="form_respostas" style="padding:10px;">
                                    <input type="text" name="nome_resposta" value="Digite seu nome" class="campo"/>
                                    <input type="text" name="resposta" value="Digite sua resposta" class="campo" size="40" />
                                    <input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>" />
                                    <input type="hidden" name="id_opiniao" value="<?php echo $id_opiniao; ?>" />
                                    <input type="submit" name="botao_respostas" style="display:none" />
                                </form>
                            </div><!--id comentario-->
                        
                        <?php 
                                } //Final do foreath de opinioes
                                
                            } else{
                                echo '<center>Nenhum opiniao sobre o produto</center>';
                            }
                        ?>
                            </div><!--classe opiniao-->
                </div>--><!--id opiniao-->
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


                                <!--<span class="abre_respostas">Respostas</span>
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
                                ?>-->