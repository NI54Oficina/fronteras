<?php
/* @var $this ChatController */
/* @var $model Chat */

$this->breadcrumbs=array(
	'Chats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Chat', 'url'=>array('index')),
	array('label'=>'Create Chat', 'url'=>array('create')),
	array('label'=>'Update Chat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Chat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chat', 'url'=>array('admin')),
);
?>

<h1>View Chat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'nombre',
		'mail',
		'motivo',
		'abierto',
	),
)); ?>
<br>
<hr>
<h4>Chat Log</h4>
<div class="chatLog">
<?php
$webroot = Yii::getPathOfAlias('webroot');
$file =  $webroot . DIRECTORY_SEPARATOR . 'chat_log' . DIRECTORY_SEPARATOR . "chat_".$model->id.'.txt';
if(file_exists($file)){
   $lines = file($file);
   foreach ($lines as $line_num => $line)
   {
	  
	echo  $line = str_replace("\n", "", $line);
	  echo "<br>";

	}
 }
 
?>
</div>

<style>
.chatLog{
	width:100%;
	
}
.chatLog span{
	display:inline-block;
	background-color:blue;
	padding:10px;
	margin:10px;
}
</style>