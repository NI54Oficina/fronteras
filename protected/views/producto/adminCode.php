<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Producto', 'url'=>array('create')),
);

?>

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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.9,b-colvis-1.0.3,cr-1.2.0,fc-3.1.0,r-1.0.7,rr-1.0.0,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.9,b-colvis-1.0.3,cr-1.2.0,fc-3.1.0,r-1.0.7,rr-1.0.0,se-1.0.1/datatables.min.js"></script>

<h1>Administrar Productos code</h1>

<div class="form-group">
<select id="paisList" name="" class="form-control required empty" style="width:80%;display:inline-block;">
<option selected disabled>Elegí Pais</option>
<?php
	foreach (CHtml::listData(Pais::model()->findAll(), 'id', 'nombre') as $value => $name) {
		echo '<option value="' . $name . '">' . $name . '</option>';
	}
?>
</select>
<button type="button" id="buttonFilterPais" >Filtar Pais</button>
</div>

<table id="tablePais">
<thead> <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Botones</th>
        </tr>
	</thead>
<tbody>
<?php 

foreach($model as $producto){
	if($producto->codeContent!=0){
	echo "<tr> <td>".$producto->id."</td>";
	echo " <td>".$producto->nombre."</td>";
	echo " <td><a href='".Yii::app()->getBaseUrl(true)."/index.php?r=producto/view&id=".$producto->id."'>Ver </a>";
	//if($producto->codeContent==0){
		//echo "<a href='".Yii::app()->getBaseUrl(true)."/index.php?r=producto/update&id=".$producto->id."'>Update </a>";
	//}else{
		echo "<a href='".Yii::app()->getBaseUrl(true)."/index.php?r=producto/updateCode&id=".$producto->id."'>Update Code</a>";
	//}
			echo "<p class='delete' href='".Yii::app()->getBaseUrl(true)."/index.php?r=producto/delete&id=".$producto->id."'>Delete </p>";
	echo "</td></tr>";
	}
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
	
	
	/*jQuery('#producto-grid').yiiGridView('update', {
		type: 'POST',
		url: jQuery(this).attr('href'),
		success: function(data) {
			//jQuery('#producto-grid').yiiGridView('update');
			//afterDelete(th, true, data);
			console.log("borradoooo");
		},
		error: function(XHR) {
			return afterDelete(th, false, XHR);
		}
	});*/
	//return false;
});

jQuery(document).on('click','#buttonFilterPais',function() {
	if(!$("#paisList").val()!= ''){
		
		var baseURl="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php?r=producto/adminCode";
		location.replace(baseURl);
	}else{
		
		var baseURl="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php?r=producto/adminCode&pais=";
		location.replace(baseURl+$("#paisList").val());
	}
	
});
</script>