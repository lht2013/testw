<?php
header("Access-Control-Allow-Origin: * ");
$username=$_POST["username"];
$msgary = array ('success'=>true,'msg'=>$username);
echo $json= json_encode($msgary);
?>