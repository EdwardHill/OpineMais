<div id="nav2">
                <div id="header-wrapper">

                    <div id="header2">

                        <h1 id="logo"><a href="home.php"><img src="css/images/opmais.png"   style="width:5.8em ;heigth:14em;"></a></h1>

                        <ul class="divided">
                            <li><img src="css/images/user.png" alt="Logo Perfil"  style="width:2.2em;" /> Olá, <?php
                                if (!empty($_SESSION['nome_usuario'])) {
                                    $nome = $_SESSION['nome_usuario'];
                                    echo $nome;
                                } else {
                                    echo 'Visitante';
                                }
                                ?>  </li>
                        </ul>
                        <ul class="btheader">
                            <li><a href="login.php" class="button">Entre</a></li>
                            <li><a href="cadastroUsuario.php"  class="button">Cadastre-se</a></li>
                            <li><a href="model/util/logout.php"  class="button">Sair</a></li>
                        </ul>

                    </div>

                </div>

            </div>