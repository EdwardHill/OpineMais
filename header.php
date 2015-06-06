<div id="nav2">
    
                <div id="header-wrapper">

                    <div id="header2">

                        <h1 id="logo"><a href="home.php"><img src="css/images/opmais.png"   style="width:5.8em ;heigth:14em;"></a></h1>

                        <ul class="divided">
                            
                            <li><img src="css/images/user.png" alt="Logo Perfil"  style="width:2.2em;" /> Olá, 
                                <?php
                                    include_once ('imports.php');
                                    
                                    //session_start();
                                    
                                    if (!empty($_SESSION['usuario'])) {
                                        $serializacao = $_SESSION['usuario'];
                                        $usuario = unserialize($serializacao);
                                        
                                        echo $usuario->getNome();
                                    } else {
                                        echo 'Visitante';
                                    }
                                ?>  </li>
                        </ul>
                        
                        <ul class="btheader">
                            
                            <?php 
                            if(!empty($_SESSION['usuario'])){
                                
                            echo '<li></li>'
                                . '<li></li>';
                            echo '<li><a href="model/util/logout.php"  class="button">Sair</a></li>';
                            }else{
                             
                            echo '<li><a href="login.php" class="button">Entre</a></li>';
                            echo '<li><a href="cadastroUsuario.php"  class="button">Cadastre-se</a></li>';
                             echo '<li></li>'; 
                            }     
                           ?>
                          
                        </ul>

                    </div>
                    
                </div>

            </div>
