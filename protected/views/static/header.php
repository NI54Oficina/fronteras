<header class="headerDesktop" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

<span  class=" glyphicon glyphicon-menu-hamburger navbar-toggle collapsed" data-toggle="collapse" data-target="#inner-header" aria-expanded="false" aria-controls="navbar" ></span>	
	<div id="inner-header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse" data-toggle="collapse" >
		<ul class="ul-nav col-lg-11 col-md-12 col-sm-11 col-xs-9" id="ul-nav-principal" style="">
		<li class="li-header " ><p  class="toggle-dropdown-header" target="#drop1" ><?php echo Textos::model()->GetText(347); ?> <span class="glyphicon glyphicon-chevron-down"></span></p>
		<ul id="drop1" class="dropdown-header-nav">
						<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/link1">Link 1</a></li>
						<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/link2">Link 2</a></li>
							
				</ul>
		</li>
		</ul>
	</div>
</header>