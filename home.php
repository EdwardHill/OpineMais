
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
<?php
    if(empty($_POST['busca'])){
?>
        <h3 id="">Itens Disponíveis:</h3>
<?php
    }else{
?>
        <h3 id="">Resultado da Busca:</h3>
<?php
    }
?>
</div>  

    <ul id="jogos" class="tabela">
	<?php 
            if(!empty($arrayProduto)){
                if(!empty($_POST['busca'])){
                    $busca = $_POST['busca'];
                    $busca = strtolower($busca);
                    
                    $arrayBusca = array();
                    foreach ($arrayProduto as $produtoBusca){
                        $nome_produto = $produtoBusca->getNome_produto();
                        $nome_produto = strtolower($nome_produto);
                        if (strpos($nome_produto, $busca) !== false) {
                            array_push($arrayBusca, $produtoBusca);
                        }
                    }
                    if(!empty($arrayBusca)){
                        foreach ($arrayBusca as $produtoResultado){
        ?>
                        <li>
                            <a href="detalharProduto.php?id_produto=<?php echo $produtoResultado->getId_produto();?>" class="image">
                               
                                <img src="images/upload/<?php echo $produtoResultado->getImagem();?>" id="imabaixa"  alt="<?php echo $produtoResultado->getCategoria();?>" /></a>
                                <h4>
                                    <?php 
                                        echo $produtoResultado->getNome_produto();
                                        echo " - ".$produtoResultado->getMarca();
                                    ?>
                                </h4>
                            <h4 style="background: white; color: black">Categoria: <?php echo $produtoResultado->getCategoria();?></h4>

                            <img src="images/bom.png"  id="opiniao" alt="bom"height="30" width="30"/>
                                <?php 
                                    echo '( '.$produtoResultado->getQualificacao_positiva().' )';
                                ?> 
                            <img src="images/ruim.png"  id="opiniao" alt="ruim"height="30" width="30"/>
                                <?php 
                                    echo '( '.$produtoResultado->getQualificacao_negativa().' )'; 
                                ?>
                            
                            
                                       
                        </li>        
        <?php
                        }    
                    }else{
                        echo '<div align="center">Nenhum produto encontrado com a referência "'.$busca.'"</div>';
                    }
                }else{
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

                            <img src="images/bom.png"  id="opiniao" alt="bom"height="30" width="30"/>
                                <?php 
                                    echo '( '.$produtoDown->getQualificacao_positiva().' )';
                                ?> 
                            <img src="images/ruim.png"  id="opiniao" alt="ruim"height="30" width="30"/>
                                <?php 
                                    echo '( '.$produtoDown->getQualificacao_negativa().' )'; 
                                ?>
                            
                            
                                       
                        </li>
        <?php 
                        }
        
                    }else{
                        echo '<div align="center">Não há mais itens a serem exibidos</div>'; 
                    }
                }
            }
        ?>    
        
      
    </ul>
        
</div>
        </div>
        </div>
    </body>
</html>