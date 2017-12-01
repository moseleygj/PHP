<html>
<body>
<b>username:</b> <?php echo $_POST["userName"];?><br>
<b>password:</b> <?php echo $_POST["passWord"];?>

<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$usrN = $_POST["userName"].":";
fwrite($myfile, $usrN);

$passW = $_POST["passWord"];
fwrite($myfile, $passW);

echo "<br>file written.";
fclose($myfile);



?>
</body>
</html>
