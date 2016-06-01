<?php 
$iconDown='<span class="glyphicon glyphicon-chevron-down" style="color:#bb4544"></span>';
$iconUp=' <span class="glyphicon glyphicon-chevron-up" style="color:#5e974c"></span>';
$iconEqual='<span class="glyphicon" style="font-size:1.5em;position:relative;top:-5px;"><strong>=</strong></span>';
?>
<!--MERCADOS-->

<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 box-mercado">

	<div class="box-mercado-title col-lg-4 col-md-4 col-sm-6 col-xs-12 hidden-xs" hid="1">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			<h1 class="center-to-parent">Mercados</h1>
		
		</div>
		
	</div>

	
	
	<?php include("mercados/ganado.php") ?>
	<?php include("mercados/indicadores.php") ?>
	<?php include("mercados/grano.php") ?>
	</div>
	
	<script>
	$(document).ready(function(){
			$(".subtablesNav").each(function(){
				var idParent= $(this).attr("id");
				
				$(this).find(".subtablesButton").each(function(){
					$(this).attr("parent",idParent);
					if($(this).hasClass("defaultSubtable")){
						$("#"+$(this).attr("target")).show();
						$(this).addClass("selectedSubTable")
					}else{
						$("#"+$(this).attr("target")).hide();
					}
					
				});
				/*$(this).find(".subtablesButton").each(function(){
					$("#"+$(this).attr("target")).show();
					return;
				});*/
			});
			$("body").on("click",".subtablesButton",function(){
				HideAllSubTables($(this).attr("parent"));
				$(this).addClass("selectedSubTable");
				$("#"+$(this).attr("target")).show();
			});
			function HideAllSubTables(parent){
				$('#'+parent).find(".subtablesButton").each(function(){
					$("#"+$(this).attr("target")).hide();
					$(this).removeClass("selectedSubTable");
				});
			}
	});
	</script>