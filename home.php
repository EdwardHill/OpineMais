
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - Opine Mais </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
       	<script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/easySlider1.7.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#slider").easySlider({
                    auto: true,
                    continuous: true
                });
            });
        </script>

        <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />


    </head>

    <body>
        <div class="main">
            <?php
            session_start();
            include("header.php");
            ?>
           
            <?php include("leftBar.php") ?>
            <?php include("rightBar.php") ?>
            <div id="container">

                <div id="header"><h1>Produtos em Destaque</h1></div>
                <div id="content">
                    <div id="slider">
                        <ul>				
                            <li><div id="titulo"><h2 id="centro"> <?php echo $titulo ?></h2></div><a href="comentarProduto.php?produto=<?php echo$id_produto ?>"><img src="images/upload/<?php echo $imagem ?>"  id="centro" alt="<?php echo $descricao ?>"/></a></li>
                            <li><div id="titulo"><h2 id="centro"> <?php echo $titulo ?></h2></div><a href="comentarProduto.php?produto=<?php echo$id_produto ?>"><img src="images/upload/1431644334.jpg"  id="centro" alt="<?php echo $descricao ?>"/></a></li>
                            <li><div id="titulo"><h2 id="centro"> <?php echo $titulo ?></h2></div><a href="comentarProduto.php?produto=<?php echo$id_produto ?>"><img src="images/upload/1433446092.jpg"  id="centro" alt="<?php echo $descricao ?>"/></a></li>
                            <li><div id="titulo"><h2 id="centro"> MAnga</h2></div><a href="comentarProduto.php?produto=<?php echo$id_produto ?>"><img src="images/upload/1433446092.jpg"  id="centro" alt="<?php echo $descricao ?>"/></a></li>
         
                        </ul>
                    </div>

                </div>

            </div>
            <br>
            <br>
            <br>
            <?php include("footer.php") ?>

        </div>
