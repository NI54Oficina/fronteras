<div class="col-md-2 side-bar" style="left:0;" >
	<div class="col-md-12" style="displa:inline-block;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-blanco.png"  style="width:300px; max-width:80%;padding-top:20px;"/></div>
	<div class="logo"></div>
	<!--<div class="item" src="producto/create">Item 1</div>!-->
	
	<?php if(Yii::app()->permissionChecker->CheckUrl("pais/create")){?>
	<div class="item" >País</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/pais/create/">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/pais/admin">Administrar</div>
	</div>
	<?php } ?> 
	
	<?php if(Yii::app()->permissionChecker->CheckUrl("notas/create")){?>
	<div class="item" >Notas</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/notas/create">Crear</div>
		<?php if(Yii::app()->permissionChecker->CheckUrl("notas/update")){?>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/notas/admin">Administrar</div>
		<?php } ?>
	</div>
	<?php } ?>
	
	
	<?php if(Yii::app()->permissionChecker->CheckUrl("user/create")){?>
	<div class="item" >User</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/user/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/user/admin">Administrar</div>
	</div>
	<?php } ?>
	
	<?php if(Yii::app()->permissionChecker->CheckUrl("userRole/create")){?>
	<div class="item" >User Role</div>
	<div class="item-list">
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/userRole/create">Crear</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/userRole/admin">Administrar</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/userRole/operations">Operaciones</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/userRole/adminOperations">Administrar Operaciones</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/userRole/permission">Permissions</div>
		<div class="item" src="<?php echo $_SESSION["short"]; ?>/userRole/adminPermission">Administrar Permissions</div>
	</div>
	<?php } ?>
	
	
	<div class="item" src="site/logout" >Logout</div>
</div>