
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - Opine Mais </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcut icon" href="images/logtop.png" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/funcao.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#produtos').dataTable({
                    "ordering": false,
                    "lengthMenu": [[5, 10, 30, -1], [5, 10, 30, "Todos"]],
                    "paging": false,
                    "language": {
                        "sUrl": "js/pt-br.txt"
                    }
                });
            });

        </script>
        <script type="text/javascript">
            jQuery(function() {
                jQuery('form.rating').rating();
            });</script>

    </head>
    <body>
        <div class="main">

            <div id="nav2">
                <div id="header-wrapper">

                    <div id="header" class="container">

                        <h1 id="logo"><a href="home.php"><img src="css/images/opmais.png" alt= "logo OpineMais"  style="width:5.8em ;heigth:14em;"></a></h1>

                        <ul class="divided">
                            <li><img src="css/images/user.png" alt="Logo Perfil"  style="width:2.2em;" /> Ola,<?php
                                if (!empty($_SESSION['nome'])) {
                                    $nome = $_SESSION['nome'];
                                    echo $nome;
                                } else {
                                    echo 'Visitante';
                                }
                                ?>  </li> 

                        </ul>
                        <ul class="btheader">             
                            <li><a href="login.php" class="button">Entre</a></li>
                            <li><a href="cadastroUsuario.php"  class="button">Cadastre-se</a></li>
                            <li><a href="util/logout.php"  class="button">Sair</a></li>                              
                        </ul>



                    </div>	

                </div>

            </div>
            <?php include("leftBar.php") ?>
            <?php include("rightBar.php") ?>
            <div id="content">


                <div id="geral">
                    <header class="major">
                        <h3>Produtos</h3>
                    </header>
                    <table id="produtos" align="center" class="display" >

                        <thead>
                            <tr>
                                <th rowspan="1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                            ob_start();

                            include_once 'model/util/connection.php';
                            //include_once 'util/sessao.php';
                            $dados_produto = mysql_query("select * from produto");
                            while ($sql = mysql_fetch_array($dados_produto)) {
                                $id_produto = $sql['id_produto'];
                                $titulo = $sql['nome_produto'];
                                $descricao = $sql['detalhes'];
                                $imagem = $sql['imagem'];
                                ?>								
                                <tr>
                                    <td headers="produto">                                         
                                        <h3><?php echo $titulo ?></h3>
                                        <div ><a href="comentarProduto.php?<?php echo $id_produto ?>"><img src="images/upload/<?php echo $imagem ?>" class="imagem" style="width:75%;"/></a></div>
                                        <h4>Descrição:</h4>
                                        <p><?php echo $descricao ?></p>
                                    </td>


                                </tr>
                            <?php } ?>
                        </tbody>	

                    </table>





                </div><!--geral-->
            </div>			

        </div>
        <?php include("footer.php") ?>

    </div>