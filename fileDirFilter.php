<?php
if ($handle = opendir('.')) 
{
    while (false !== ($entry = readdir($handle))) 
	{
		if(is_dir($entry) == 1)
		{
       
		echo( "[Directory] - " . $entry . "<br/>");
		}
     else
	{
		echo( "[File] - " . $entry . "<br/>");}
       
	}
    closedir($handle);
}
?> 
