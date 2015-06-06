	<div id="sidebar2">
		<div id="nav">
				<ul class="menu2">
                                    <li></li>
                                    
				
                                    
                               <?php
                               if (!empty($_SESSION['usuario'])) {
                                   echo '<li>';
                                   echo '<a href="control/perfilUsuario.php" class="button">Perfil</a>';
                                   echo '</li>';
                                   echo '<li>';
                                   echo '<a href="cadastroProduto.php" class="button">Novo Produto</a>';
                                   echo '</li>';
                                } 
 
                                ?>  

                        </ul>		
	
		</div>
	</div>