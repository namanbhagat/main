<?php
echo"naman<br>";
$arr=array("naman"=>18,"deepanshu"=>17,"bro"=>3);
ksort($arr);
foreach($arr as $x=>$x_value)
{
	echo "key=".$x.",value=".$x_value;
	echo"<br>";
}
?>


