<?php
echo"naman<br>";
$arr=array("naman"=>18,"deepak"=>17,"bro"=>3);
asort($arr);
foreach($arr as $x=>$x_value)
{
	echo "key=".$x.",value=".$x_value;
	echo"<br>";
}
?>

