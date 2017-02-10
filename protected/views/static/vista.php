<style>
header{transition:1s;display:none;}
footer{transition:1s;display:none;}
</style>
<div style="height:100vh;position:fixed;top:0;width:100vw;">
<iframe width="100%" height="100%" allowfullscreen style="border-style:none;" src="<?php echo Yii::app()->request->baseUrl; ?>/pannellum-master/src/standalone/pannellum.htm?config=../../examples/<?php echo $data; ?>.json"></iframe>
</div>