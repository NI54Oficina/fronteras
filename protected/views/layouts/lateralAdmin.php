<div class="col-md-2 side-bar" style="left:0;" >
	<div class="logo"></div>
	<!--<div class="item" src="producto/create">Item 1</div>!-->
	<div class="item" src="<?php echo $_SESSION["short"]; ?>/producto/adminPais">Vademecum</div>
	<div class="item" >Pais</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/pais/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/pais/admin">Administrar</div>
	</div>
	<div class="item" >Establecimiento</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/establecimiento/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/establecimiento/admin">Administrar</div>
	</div>
	<div class="item" >Pages</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/pages/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/pages/admin">Administrar</div>
	</div>
	
	
	<div class="item" >Miscelaneo</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/miscelaneo/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/miscelaneo/admin">Administrar</div>
	</div>
	
	<div class="item" >Notas</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/notas/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/notas/admin">Administrar</div>
	</div>
	
	
	
	
	<div class="item" >User</div>
	<div class="item-list">
		<div class="item" src="user/create">Crear</div>
		<div class="item" src="user/admin">Administrar</div>
	</div>
	
	
	<?php
	if(Yii::app()->user->checkAccess('adminAccess')){
	?>
	<div class="item" >User Role</div>
	<div class="item-list">
		<div class="item" src="userRole/create">Crear</div>
		<div class="item" src="userRole/admin">Administrar</div>
		<div class="item" src="userRole/operations">Operaciones</div>
		<div class="item" src="userRole/adminOperations">Administrar Operaciones</div>
		<div class="item" src="userRole/permission">Permissions</div>
		<div class="item" src="userRole/adminPermission">Administrar Permissions</div>
	</div>
	<?php 
	}
	?>
	<div class="item" src="/webBago/site/logout" style="">Logout</div>
</div>