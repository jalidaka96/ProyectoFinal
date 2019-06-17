<!-- ESTE NAVSIDE EN COMPARACION CON EL OTRO NAVSIDE ESTE SOLO SE MUESTRA EN LA PAGINA DE ADMINISTRACION-->
<div class="wrapper" ng-app="miApp" ng-controller="adminCtrl">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Gestionar <span class="glyphicon glyphicon-wrench"></span></h3>
        </div>

        
        <ul class="list-unstyled components">
            <!-- SECCION CON BOTON PARA GESTIONAR LOS USUARIOS-->
            <li class="active" >
                <button class="btn btn-link" ng-click="usuariosMenu()">
                    <a href="#" >Usuarios  <span class="glyphicon glyphicon-user"></span></a>
                </button>
                
                
            </li>

            <!-- SECCION CON BOTON PARA GESTIONAR LOS PRODUCTOS-->
            <li>
                <button class="btn btn-link" ng-click="productosMenu()">
                    <a href="#"  aria-expanded="false" >Productos <span class="glyphicon glyphicon-phone"></a>
                </button>
                
                
            </li>


            <!-- BOTON PARA ACCEDER AL LOG -->
            <li>
                <button class="btn btn-link" >
                    <a href="/proyecto/log"  aria-expanded="false" >LOG <span class="glyphicon glyphicon-file"></a>
                </button>
                
                
            </li>
        </ul>

    </nav>