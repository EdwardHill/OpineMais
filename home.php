
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
            <?php include("header.php");?>
            <?php include("leftBar.php");?>
            <?php include_once ('imports.php');?>
            <?php 
                $fachada = Fachada::getInstance();
                $arrayProduto = $fachada->listarProduto();
               
                
            ?>
             
          
            <div id="container">

                <div id="header"><h1>Produtos em Destaque</h1></div>
                <div id="content">
                    <div id="slider">
                        <ul>	
                <?php
                    if(empty($arrayProduto)){
                        foreach($arrayProduto as $p){
                 ?>
                            <li><div id="titulo"><h2 id="centro"> <?php echo $p->getNome();?></h2></div><a href="comentarProduto.php?produto=<?php echo$p->getId_produto(); ?>"><img src="images/upload/<?php echo $p->getImagem(); ?>"  id="centro" alt="<?php echo $p->getDetalhes();?>"/></a></li>
                <?php   
                
                        }
                    }
                ?>
                        </ul>
                    </div>

                </div>
               
            </div>
            <br>
            <br>
           
            <div class="global-div">
               
<ul class="links">
    
        <li> 
        	<a href="#" title="lista"> 
            	<img src="css/images/lista.gif" width="14" height="13" alt="Lista" />Lista
            </a>
        </li>
        <li> 
        	<a href="#" title="duascolunas">
	            <img src="css/images/duascolunas.gif" width="14" height="13" alt="Colunas" />Duas colunas
            </a>
        </li>
        <li>  
        	<a href="#" title="tabela">
            	<img src="css/images/tabela.gif" width="14" height="13" alt="Tabela" />Tabela
            </a>
        </li>
</ul>  

    <ul id="jogos" class="tabela">
		
        <li>
            <a href="#" class="image"><img src="css/images/pq21376972.jpg" alt="Game" /></a>
        	<h2>Metal Gear 4</h2>
            <p>R$ 80,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21435686.jpg" alt="Game" /></a>
        	<h2>Grand Theft Auto</h2>
            <p>R$ 120,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21440232.jpg" alt="Game" /></a>
        	<h2>Need for Speed</h2>
            <p>R$ 95,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21465797.jpg" alt="Game" /></a>
        	<h2>Mortal Kombat</h2>
            <p>R$ 110,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21465871.jpg" alt="Game" /></a>
        	<h2>Devil May Cry</h2>
            <p>R$ 90,00</p>
        </li>
        <li>
             <a href="#" class="image"><img src="css/images/pq21478377.jpg" alt="Game" /></a>
        	<h2>Resident Evil 5</h2>
            <p>R$ 150,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21480470.jpg" alt="Game" /></a>
        	<h2>Lord of the Rings</h2>
            <p>R$ 130,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21498024.jpg" alt="Game" /></a>
        	<h2>Kill Zone 2</h2>
            <p>R$ 99,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21507480.jpg"alt="Game" /></a>
        	<h2>Tomb Raider</h2>
            <p>R$ 140,00</p>
        </li>
<!--        <li>
            <a href="#" class="image"><img src="css/images/pq21507483.jpg"alt="Game" /></a>
        	<h2>Wanted</h2>
            <p>R$ 125,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21538799.jpg" alt="Game" /></a>
        	<h2>Prototype</h2>
            <p>R$ 135,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21435686.jpg" alt="Game" /></a>
        	<h2>Grand Theft Auto</h2>
            <p>R$ 120,00</p>
        </li>
        <li>
            <a href="#" class="image"><img src="css/images/pq21465871.jpg" alt="Game" /></a>
                 
        	<h2>Devil May Cry</h2>
            <p>R$ 90,00</p>
        </li>
          <li>
              <a href="#" class="image"><img src="css/images/pq21440232.jpg" alt="Game" /></a>
        	<h2>Need for Speed</h2>
            <p>R$ 95,00</p>
        </li>-->
      
    </ul>
        
</div>
        </div>
    </body>
</html>