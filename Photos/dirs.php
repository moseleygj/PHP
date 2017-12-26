<?php

if ($handle = opendir('.')) {
    echo  $handle ."<br/>";
    while (false !== ($entry = readdir($handle))) {
        echo "$entry" . "<br/>";
    }
closedir($handle);
}
?>
