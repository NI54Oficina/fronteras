<div class="col-md-2 side-bar" style="left:0;" >
	<div class="logo"></div>
	<h3 style="color:white;">Vadémecum</h3>
	<!--<div class="item" src="producto/create">Item 1</div>!-->
	<div class="item" >Producto</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/producto/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/producto/adminPais">Administrar</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/productoPartes/create">Partes/Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/productoPartes/admin">Partes/Administrar</div>
	
	</div>
	<div class="item" >Seccion</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/seccion/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/seccion/admin">Administrar</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/seccionRegionalizacion/create">Crear Traducción</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/seccionRegionalizacion/admin">Administrar traducciones</div>
	</div>
	<div class="item" src="<?php echo $_SESSION["short"]; ?>/imagen/admin">Imagenes</div>
	
	<div class="item" src="<?php echo $_SESSION["short"]; ?>/site/admin">Volver panel general</div>
	<div class="item" src="/webBago/site/logout" style="background-color:black;color:white;">Logout</div>
</div>