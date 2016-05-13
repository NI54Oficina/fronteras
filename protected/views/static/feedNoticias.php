<?php

FeedNoticias::model()->CheckFeed();
$provincia= new Provincia();
$provincia->nombre="poyo2";
$provincia->save();

?>