
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
                $('#usuarios').dataTable({
                    "ordering": false,
                    "lengthMenu": [[5, 10, 30, -1], [5, 10, 30, "Todos"]],
                   
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

                        <h1 id="logo"><a href="index.php"><img src="css/images/opmais.png" alt= "logo OpineMais"  style="width:5.8em ;heigth:14em;"></a></h1>

                        <ul class="divided">
                            <li><img src="css/images/user.png" alt="Logo Perfil"  style="width:2.2em;" /> Ola,<?php
                                if (!empty($_GET['nome'])) {
                                    $nome = $_GET['nome'];
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
            <div id="content">
                <?php include("leftBar.php") ?>
                <?php include("rightBar.php") ?>
               
                
                    <header class="major">
                        <h3>Usuarios</h3>
                    </header>
                    <table id="usuarios" align="center" class="display" >
                       <caption>Tabela de Clientes</caption>
                        <thead>
                            <tr>
                                <th clospan="1" id="nome">Nome</th>
                                                                <th clospan="1" id="nome">Email</th>
				<th rowspan="1" id="telefo">Telefone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            ob_start();
                            include_once 'util/connection.php';
                           $dados_usuarios = mysql_query("select * from usuario ");
                           while($sql = mysql_fetch_array($dados_usuarios)){
                                
                               $nome = $sql['nome_usuario'];
				$email = $sql['email_usuario'];
                                $telefone = $sql['telefone_usuario'];                      
                                ?>								
                                <tr>
                                    <td headers="produto">                                         
                                    <?php echo $nome ?>
                                    </td>
                                   <td> <?php echo $email?></td>
                                    <td><?php echo $telefone?></td>

                                    

                                </tr>
                            <?php } ?>
                        </tbody>	

                    </table>


              
            </div>			

        </div>
        <?php include("footer.php") ?>

    </div>