<?php


var_dump($_GET);
var_dump($_REQUEST);

var_dump($_GET['arr']);

var_dump($_SERVER['REQUEST_METHOD']);



$str =  'A \'quote\' is <b>bold</b> <?php $a <br>';

//echo $str;
var_dump(htmlentities($str));