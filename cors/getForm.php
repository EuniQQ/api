<?php

include "./commonFun.php";
header("Access-Control-Allow-Origin:http://192.168.211.71"); 
//允許所有人進來，*可以換成特定Domain(網域)
// header("Access-Control-Allow-Headers: *"); 
$input=$_POST;
echo json_encode($input);

?>