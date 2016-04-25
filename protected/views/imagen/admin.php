<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Imagen', 'url'=>array('index')),
	array('label'=>'Create Imagen', 'url'=>array('create')),
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
.preview{
	text-decoration:underline;
	cursor:pointer;
}

.preview:hover ~ img{
	position:absolute;
	display:block;
	
	
	
}
.preview ~ img{
	display:none;
	background-color:white;
	border:red 4px solid;
	min-width:30px;
	min-height:30px;
}
</style>
<h1>Manage Imagens</h1>


<table id="tablePais">
<thead> <tr>
            <th>id</th>
            <th>Producto</th>
			<th>Preview</th>
            <th>Botones</th>
        </tr>
	</thead>
<tbody>

<?php 

foreach($model as $producto){

	echo "<tr><td>".$producto->id."</td>";
	if(Producto::model()->findByPk( $producto->producto_id)){
		echo " <td>".Producto::model()->findByPk( $producto->producto_id)->nombre."</td>";
	}else{
		echo "<td></td>";
	}
	echo "<td><div class='preview' idprod='".$producto->id."'>preview</div></td>";
	echo " <td><a href='".Yii::app()->getBaseUrl(true)."/index.php?r=producto/view&id=".$producto->id."'>Ver </a>";
	echo "<a href='".Yii::app()->getBaseUrl(true)."/index.php?r=producto/update&id=".$producto->id."'>Update </a>";
	echo "<p class='delete' href='".Yii::app()->getBaseUrl(true)."/index.php?r=producto/delete&id=".$producto->id."'>Delete </p>";
	echo "</td></tr>";
}

?>
</tbody>
</table>
<script>
$("document").ready(function(){
	$("body").on("mouseover",".preview",function(){
		console.log($(this).parent());
		if($(this).parent().length<2){
			$(this).parent().append("<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/imagen/"+$(this).attr("idprod")+"'  />");
		}
	});
});
</script>
