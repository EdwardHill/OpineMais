
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - Opine Mais </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">           
       	<script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/easySlider1.7.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
       
        <script type="text/javascript">
            $(document).ready(function() {
                $("#slider").easySlider({
                    auto: true,
                    continuous: true,
                    numeric: true
                   
                });
            });
            
        
        </script>

        <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />


    </head>

    <body>
        <div class="main">
            <?php session_start();?>
            <?php include("header.php");
            
            ?>
            <?php include_once ('imports.php');?>
            <?php 
                $fachada = Fachada::getInstance();
                $arrayProduto = $fachada->listarProduto();  
            ?>
             <div id="recuo">
          
            <div id="container">

                <div id="header"><h1>Produtos em Destaque</h1></div>
                <div id="content">
                    <div id="slider">
                        <ul>	
                <?php
                    if(!empty($arrayProduto)){
                        
                        for($i=0;$i<5;$i++){
                            if(!empty($arrayProduto[$i])){
                                $produtoUp = $arrayProduto[$i];
                            
                                echo '<li>'
                                        . '<div id="titulo"><h2 id="centro"> '.$produtoUp->getNome_produto().' - '.$produtoUp->getMarca().'</h2></div>'
                                        . '<a href="detalharProduto.php?id_produto='.$produtoUp->getId_produto().'">'
                                        . '<img src="images/upload/'.$produtoUp->getImagem().'"  id="imacima" alt="'.$produtoUp->getCategoria().'"/></a>'
                                   . '</li>';
                            }
                        }
                    }else{
                        echo 'Nenhum Item Cadastrado';
                    }
                ?>
                        </ul>
                    </div>

                </div>
 
            </div>
  
            <div class="global-div">
               
<div class="links">
   <h3 id="">Itens Disponíveis:</h3>
</div>  

    <ul id="jogos" class="tabela">
	<?php 
            if(!empty($arrayProduto)){    
                if(count($arrayProduto) > 5){
                    for($i=5;$i<count($arrayProduto);$i++){
                        $produtoDown = $arrayProduto[$i];
        ?>	
                        <li>
                            <a href="detalharProduto.php?id_produto=<?php echo $produtoDown->getId_produto();?>" class="image">
                               
                                <img src="images/upload/<?php echo $produtoDown->getImagem();?>" id="imabaixa"  alt="<?php echo $produtoDown->getCategoria();?>" /></a>
                                <h4>
                                    <?php 
                                        echo $produtoDown->getNome_produto();
                                        echo " - ".$produtoDown->getMarca();
                                    ?>
                                </h4>
                            <h4 style="background: white; color: black">Categoria: <?php echo $produtoDown->getCategoria();?></h4>

                            <img src="images/bom.png"  id="opiniao" alt="bom"/>
                                <?php 
                                    echo '( '.$produtoDown->getQualificacao_positiva().' )';
                                ?> 
                            <img src="images/ruim.png"  id="opiniao" alt="ruim"/>
                                <?php 
                                    echo '( '.$produtoDown->getQualificacao_negativa().' )'; 
                                ?>
                            
                            
                                       
                        </li>
        <?php 
                    }
        
                }else{
                    echo '<center>Não há mais itens a serem exibidos</center>'; 
                }
            }
        ?>    
        
      
    </ul>
        
</div>
        </div>
        </div>
    </body>
</html>