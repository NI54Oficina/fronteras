<?php

/*FeedNoticias::model()->CheckFeed();
$provincia= new Provincia();
$provincia->nombre="poyo2";
$provincia->save();*/

FeedNoticias::model()->CheckFeed()
Clima::model()->CheckFeed();
ClimaMapas::model()->CheckFeed();
HidricaMapa::model()->CheckFeed();

?>