<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
);

?>

<h1>Administrar Paises</h1>

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
	echo "<tr> <td>".$producto->id."</td>";
	echo " <td>".$producto->nombre."</td>";
	echo " <td><a href='".Yii::app()->getBaseUrl(true)."/pais/view/".$producto->id."'>Ver </a>";
	
		echo "<a href='".Yii::app()->getBaseUrl(true)."/pais/update/".$producto->id."'>Update </a>";
	
			echo "<p class='delete' href='".Yii::app()->getBaseUrl(true)."/pais/delete/".$producto->id."'>Delete </p>";
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
