<?php

//$arr=array("toyota","honda","bmw");
$arr=['john'=>178,'robert'=>189,'joly'=>186];
print_r($arr);
echo "<br>";
echo $arr['john'].'<br>';

foreach ($arr as $key => $value){
    echo $key.' : '.$value.'<br>';
}