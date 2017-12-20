
<?php

if ($handle = opendir('.')) {
    
    while (false !== ($entry = readdir($handle))) 
	{
        echo "$entry\n"."<br/>";
    }

    closedir($handle);
}
?>

