<header class="headerDesktop" >

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-logos">
	
		<!--Logo fronteras -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home">
			<img class="logo-fronteras" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-fronteras.png" />

		</a>

		</div>
	
		<!-- Logo bagó -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<img class="logo-bago-header"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/100x100.png" />
		</div>

	</div>

	<!--Flecos-->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flecos-header" style="margin-top: -1px;">
		<div></div>
	</div>

<div "col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" padding-top: 60px;">
<span  class=" glyphicon glyphicon-menu-hamburger navbar-toggle collapsed" data-toggle="collapse" data-target="#inner-header" aria-expanded="false" aria-controls="navbar" ></span>	
	<div id="inner-header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse header-palabras-menu" data-toggle="collapse">
		<ul class="ul-nav col-lg-12 col-md-12 col-sm-11 col-xs-9" id="ul-nav-principal">
			<li class="li-header "><p  class="toggle-dropdown-header" target="#drop1" ></p>
		
						<li id="hoy-header-m" class=" col-lg-1 col-md-1 col-sm-6 col-xs-6"><a class="a-sub link-menu col-lg-12 col-md-12 col-sm-12 col-xs-12"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/hoy">Hoy</a></li>

						<li  id="mes-header-m" class=" col-lg-1 col-md-1  col-sm-6 col-xs-6">	
							<a class="a-sub link-menu col-lg-12 col-md-12 col-sm-12 col-xs-12"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/estemes">Este mes
							</a>
						</li>

						<li  id="producir-header-m" class=" col-lg-1 col-md-1  col-sm-6 col-xs-6">
							<a class="a-sub link-menu col-lg-12 col-md-12 col-sm-12 col-xs-12"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/producir">Producir +
							</a>
						</li>

						<li  id="ayuda-header-m" class="  col-lg-1 col-md-1  col-sm-6 col-xs-6">
							<a class="a-sub link-menu col-lg-12 col-md-12 col-sm-12 col-xs-12"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/ayuda">Ayuda</a>
						</li>
		
				<ul id="drop1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dropdown-header-nav">

				</ul>
		
			</li>
		</ul>
	</div>
</div>
</header>