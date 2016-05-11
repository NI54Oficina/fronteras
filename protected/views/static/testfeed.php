<?php
$notas=FeedNoticias::model()->GetLast();
foreach($notas as $n){
	echo $n->id;
}
 ?>
 
 <script>
 $.post( "/fronteras/web/checkFeeds", function( data ) {
  console.log(data);
  if(data=="1"){
	  location.reload();
  }
});
 </script>