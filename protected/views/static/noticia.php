<?php 

$Criteria = new CDbCriteria();
				$Criteria->condition = "nid = ".$data;
				$nota = FeedNoticias::model()->find($Criteria);

?>

<h1><?php echo $nota->titulo; ?></h1>
<p><?php echo $nota->fecha; ?></p>
<p><?php echo $nota->categoria; ?></p>
<h3><?php echo $nota->bajada; ?></h3>
<p><?php echo $nota->body; ?></p>
<p><?php echo $nota->fuente; ?></p>
