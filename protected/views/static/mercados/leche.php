<?php

	$options = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
	  )
	);
	$context=stream_context_create($options);

	$data = @file_get_contents('http://api.agrofy.com/serviceslayer.production/api/MilkingYard/GetMilkPrices',false,$context);
	$col=0;
	if($data){
	 $array = json_decode($data,true);

	?>
	


	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lan-xs-6 container-items-mercados " hid="1">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

			<h3>- Leche - </h3>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 general-table-mercados" id="tablaLeche<?php echo $idLoop; ?>">

				
				<!-- contenido-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado table-mercado-items" style="padding-top:10px !important;">
				<?php $titles=["Nombre","Precio","Descripción"]; foreach($array as $item){ $col=12; ?>
					
				<!--fila-->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-mercado-items" style="border-bottom-width:3px;line-height:1em;padding-bottom:10px;">
							
							<?php $loop=0; foreach($item as $key=>$value){?>
								
									<div class="" style="width:auto;display:inline-block;min-height:0;line-height:1em;height:1em;padding-bottom:10px;padding-top:10px;">
										<?php if($loop==0){ $loop++; ?>
										
										<p class="leche-mercados leche-nombre"><strong><?php echo $value; ?></strong> <span class="hidden-sm hidden-xs">|</span></p>
										<?php }else if($loop==1){ $loop++;?>
											<p class="leche-mercados leche-precio" ><?php echo $value; ?></p>
										
										<?php }else{ ?>
											<p class="leche-mercados leche-desc" ><?php echo $value; ?></p>
										<?php } ?>
									</div>
									<br class="hidden-lg hidden-md" />
							<?php } ?>
						</div>
				<?php } ?>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actualizar-ganado">

				<p>Actualizado:
				<?php
					echo date("d-m-y");

				?>
				</p>

			</div>
			
		</div>

	</div>

	
	

<?php  } ?>


