<?php

$daysOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$days=count($daysOfWeek);
for ($i=0;$i<$days;$i++)
{
	if ($i == 0|| $i==6){
		echo "<font color=\"red\">It's the weekend, Relax!</font><br/>";
		continue;
		}
		
	echo "$daysOfWeek[$i] <br/>";

}
?>
