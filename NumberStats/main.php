<html>
<head>
<title></title>
<meta charset="UTF-8">
</head>
<style type="text/css">
</style>
<body>
<p id="info"><p>

<?php
$myfile = fopen("fakeNumbers.txt", "r") or die("Unable to open file!");
$testVar= fread($myfile,filesize("fakeNumbers.txt") . "<br/>");
$h= str_split($testVar);

$num= array(
"one"=>0,
"two"=>0,
"three"=>0,
"four"=>0,
"five"=>0,
"six"=>0,
"seven"=>0,
"eight"=>0,
"nine"=>0,
"zero"=>0);

$arrlength = count($h);

foreach ($h as $number)
{
	if ($number ==" " || $number =="" || $number =="\n")
	{
	continue;
	}
//tally the repetitons of each number
	switch($number)
	{
	case 0 : $num[0]++;echo "[ZERO]<br/>" ;
		break;
	case 1 : $num[1]++;echo "[ONE]<br/>" ;
		break;
	case 2 : $num[2]++;echo "[TWO]<br/>" ;
		break;
	case 3 : $num[3]++;echo "[THREE]<br/>" ;
		break;
	case 4 :$numb[4]++;echo "[FOUR]<br/>" ;
		break;
	case 5 : $num[5]++;echo "[FIVE]<br/>" ;
		break;
	case 6 : $num[6]++;echo "[SIX]<br/>" ;
		break;
	case 7 : $num[7]++;echo "[SEVEN]<br/>" ;
		break;
	case 8 : $num[8]++;echo "[EIGHT]<br/>" ;
		break;
	case 9 : $num[9]++;echo "[NINE]<br/>" ;
		break;
	default:continue;
	}
}

echo "<hr/>";
//echo "num[1]: " . $num[1] . ", ";

//value of the tallied  counters:
/*for ($i=0;$i<$arrlength;$i++)
{
echo $num[$i] . "<br/>";
}
*/
arsort($num);

foreach($num as $x => $value)
{
   echo "Key=" . $x . ", Value=" . $value . "<br/>";
}
?> 
</body>
<script type="text/javascript">
</script>
</html>
