<?php
/* @var $this SeccionRegionalizacionController */
/* @var $model SeccionRegionalizacion */

$this->breadcrumbs=array(
	'Seccion Regionalizacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SeccionRegionalizacion', 'url'=>array('index')),
	array('label'=>'Create SeccionRegionalizacion', 'url'=>array('create')),
);
?>
<h1>Manage Seccion Regionalizacions</h1>


<div class="form-group">
<select id="paisList" name="" class="form-control required empty" style="width:80%;display:inline-block;">
<option selected disabled>Elegí Pais</option>
<?php
	foreach (CHtml::listData(Pais::model()->findAll(), 'id', 'nombre') as $value => $name) {
		echo '<option value="' . $value . '">' . $name . '</option>';
	}
?>
</select>
<button type="button" id="buttonFilterPais" >Filtar Pais</button>
</div>

<table id="tablePais">
<thead> <tr>
            <th>id</th>
            <th>Seccion</th>
            <th>Traducción</th>
            <th>Pais</th>
            <th>Botones</th>
        </tr>
	</thead>
<tbody>
<?php 

foreach($model as $producto){
	echo "<tr> <td>".$producto->id."</td>";
	echo " <td>".Seccion::model()->findByPk($producto->idCategoria)->nombre."</td>";
	echo " <td>".$producto->nombre."</td>";
	echo " <td>".Pais::model()->findByPk($producto->pais)->nombre."</td>";
	echo " <td><a href='".Yii::app()->getBaseUrl(true)."/seccionRegionalizacion/view/".$producto->id."'>Ver </a>";
	
		echo "<a href='".Yii::app()->getBaseUrl(true)."/seccionRegionalizacion/update/".$producto->id."'>Update </a>";
	
			echo "<p class='delete' href='".Yii::app()->getBaseUrl(true)."/seccionRegionalizacion/delete/".$producto->id."'>Delete </p>";
	echo "</td></tr>";
}

?>
</tbody>
</table>

<script>
var table;
$(document).ready(function(){
    table=$('#tablePais').DataTable();
});

jQuery(document).on('click','.delete',function() {
	if(!confirm('Are you sure you want to delete this item?')) return false;
	$(".loading").show();
	var row=this;
	
	$.post( $(this).attr('href'), function( data ) {
		console.log("borrado");
		 table
        .row( $(row).parents('tr') )
        .remove()
        .draw();
		$(".loading").hide();
	});
	
	
});

jQuery(document).on('click','#buttonFilterPais',function() {
	if(!$("#paisList").val()!= ''){
		
		var baseURl="<?php echo Yii::app()->getBaseUrl(true); ?>/seccionRegionalizacion/admin";
		location.replace(baseURl);
	}else{
		
		var baseURl="<?php echo Yii::app()->getBaseUrl(true); ?>/seccionRegionalizacion/admin/pais/";
		location.replace(baseURl+$("#paisList").val());
	}
	
});
</script>


<style>
#tablePais table,#tablePais th,#tablePais td{
	border: 1px solid gray;
	padding:10px;
}

#tablePais td{
	
}
.delete{
	color:#337ab7;
	cursor:pointer;
}
.delete:hover{
	color:#23527c;
	text-decoration:underline;
}
</style>