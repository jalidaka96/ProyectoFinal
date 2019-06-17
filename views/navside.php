<!-- ESTE NAVSIDE ES UN MENU LATERAL QUE SE MUESTRA PARA PODER SELECCIONAR UNA SECCION O UNA CATEGORIA DETERMINADA-->
<div class="wrapper" ng-app="miApp" ng-controller="mainCtrl">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Categorias</h3>
        </div>
        <hr>

        
        <ul class="list-unstyled components">
            <!-- SECCION PARA CATEGORIA ORDENADORES-->
            <li class="active">
                <a href="#ordenadoresMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ordenadores</a>
                <!-- SUBCATEGORIA DE ORDENADORES-->
                <ul class="collapse list-unstyled" id="ordenadoresMenu">
                    <li>
                        <a href="#" ng-click="portatiles()">Portatiles</a>
                    </li>
                    <li>
                        <a href="#" ng-click="deMesa()">De mesa</a>
                    </li>
                </ul>
            </li>

            <!-- SECCION PARA CATEGORIA MOVILES-->
            <li>
                <a href="#movilesMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Móviles</a>
                <!-- SUBCATEGORIA DE MOVILES-->
                <ul class="collapse list-unstyled" id="movilesMenu">
                    <li>
                        <a href="#" ng-click="android()">Android</a>
                    </li>
                    <li>
                        <a href="#" ng-click="ios()">IOS</a>
                    </li>
                </ul>
            </li>

            <!-- SECCION PARA CATEGORIA PERIFERICOS-->
            <li>
                <a href="#perifericosMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Periféricos</a>
                <ul class="collapse list-unstyled" id="perifericosMenu">
                    <!-- SUBCATEGORIA DE PERIFERICOS-->
                    <li>
                        <a href="#" ng-click="monitores()">Monitores</a>
                    </li>
                    <li>
                        <a href="#" ng-click="teclados()">Teclados</a>
                    </li>
                    <li>
                        <a href="#" ng-click="ratones()">Ratones</a>
                    </li>
                    <li>
                        <a href="#" ng-click="impresoras()">Impresoras</a>
                    </li>
                    <li>
                        <a href="#" ng-click="altavoces()">Altavoces</a>
                    </li>
                </ul>
            </li>
        </ul>
        
    </nav>
    