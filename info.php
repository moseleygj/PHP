<?php
$myFile ="programs.txt";
$fh=fopen($myFile,'w+') or die("cannot open file");
$txt="no.......h";
fwrite($myFile,$txt);
fclose($fh);
?>
					
