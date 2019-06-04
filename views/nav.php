<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<ul class="navbar-nav">
        <a class="navbar-brand" href="#">TeknoMeli</a>
    </ul>
    <ul class="navbar-nav mr-auto">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <span class="navbar-toggler-icon"></span>
        </button>
    </ul>
        
       
        

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNabvar">
        <span class="navbar-toggler-icon"></span>
    </button>

	<div class="collapse navbar-collapse" id="collapsibleNabvar">
		
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo constant('URL'); ?>main">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo constant('URL'); ?>about">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo constant('URL'); ?>ayuda">Ayuda</a>
            </li>
            <?php
                if (isset($_SESSION['usuario'])) {
                    if ($_SESSION['rol'] == "administrador") {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>admin">Administrador</a>
                        </li><?php 
                    }
                    
                }

            ?>


            
        </ul>
        
        <!--<ul class="navbar-nav mr-auto col-md-2">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 col-md-5 col-lg-12 d-none d-md-block" type="text" placeholder="Buscar">
            </form>
        </ul>-->
		<ul class="navbar-nav">
			<?php 
                if (!isset($_SESSION['usuario'])) {
                    ?><li class="nav-item">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>login">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>registro">Registrarse</a>
                        </li><?php 
                } 


            ?>
            <li class="nav-item">
                <a class="nav-link" href="">Carrito</a>
            </li>
            <?php 
                if (isset($_SESSION['usuario'])) {
                    ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toogle perfil"  data-toggle="dropdown" ><?php echo $_SESSION['usuario'] ?><span class="glyphicon glyphicon-user"></span></a>
                                
                                <ul class="dropdown-menu dropdown-menu-right" id="menuPerfil">
                                    <li><a class="linkPerfil" href="<?php echo constant('URL'); ?>perfil">Ir a perfil</a></li>
                                    <li><a class="linkPerfil" href="<?php echo constant('URL'); ?>login/cerrarSession" >Cerrar sesion</a></li>
                                    
                                </ul>
                            </div>
                            

                        </li>
                    <?php
                }
            ?>
			
			
		</ul>
	</div>
</nav>




  


