<div class="col-md-2 side-bar" style="left:0;" >
	<div class="logo"></div>
	<!--<div class="item" src="producto/create">Item 1</div>!-->
	<div class="item" src="producto/adminPais">Vademecum</div>
	<div class="item" >Pais</div>
	<div class="item-list">
		<div class="item" src="pais/create">Crear</div>
		<div class="item" src="pais/admin">Administrar</div>
	</div>
	<div class="item" >Establecimiento</div>
	<div class="item-list">
		<div class="item" src="establecimiento/create">Crear</div>
		<div class="item" src="establecimiento/admin">Administrar</div>
	</div>
	<div class="item" >Pages</div>
	<div class="item-list">
		<div class="item" src="pages/create">Crear</div>
		<div class="item" src="pages/admin">Administrar</div>
	</div>
	
	
	<div class="item" >Miscelaneo</div>
	<div class="item-list">
		<div class="item" src="miscelaneo/create">Crear</div>
		<div class="item" src="miscelaneo/admin">Administrar</div>
	</div>
	
	<div class="item" >Notas</div>
	<div class="item-list">
		<div class="item" src="notas/create">Crear</div>
		<div class="item" src="notas/admin">Administrar</div>
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
	<div class="item" src="/webBago/site/logout" style="background-color:black;color:white;">Logout</div>
</div>