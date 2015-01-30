<?php
/*		$msgary = array ('success'=>true,'msg'=>"asdadad");
			$json= json_encode($msgary);
	//echo "var json=$json;";
	echo "callback('$json')";*/
$arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);  
$result=json_encode($arr);  
//echo $_GET['callback'].'("Hello,World!")';  
//echo $_GET['callback']."($result)";  
//动态执行回调函数  
$callback=$_GET['callback'];  
echo $callback."($result)";  	
?>