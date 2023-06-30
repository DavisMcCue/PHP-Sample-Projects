<!--
Name: Davis McCue
Date: 3/30/2023
Description: Create a php file that displays the time and day of the week with a qoute attached to it.-->

<!DOCTYPE html>
<html lang="en">
    <meta charset ="utf-8">
<head>
	<title>Date and Time Functions with Quote</title>
</head>
<body>
<!--scripts-->
<?php
echo "Today is " . date("Y/m/d") . "<br>";
//echo "Today is " . date("Y.m.d") . "<br>";
//echo "Today is " . date("Y-m-d") . "<br>";
//echo "Today is " . date("l");
echo"<br>";
?> 
<?php  
//echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
//echo date("h:i a");
?>
<?php
echo"<br>";
?>
<?php
date_default_timezone_set("America/New_York")."<br>";
echo "The time is " . date("h:i:sa")."<br>";
?> 
<?php
//Determine the number of days between two dates
//Start Date
$then = "1957-08-12";
 echo"<br>";
//Convert it into a timestamp.
$then = strtotime($then);
 
//Get the current timestamp.
$now = time();
 
//Calculate the difference.
$difference = $now - $then;
 
//Convert seconds into days.
$days = floor($difference / (60*60*24) );
 
//echo "The difference between ". $then. " and " . $now. "is " .$days. "<br><br>";
//echo "The number of years from " . $then . " is " . $days / 365 . "<br><br>";
?>
<?php
$today = date("l");  //determine today's date

//If today is Monday, a message will display 
if($today == "Monday")
{
	echo "Today is Monday, the start of a work week!" . "<br><br>";
	echo "Insomnia sharpens your math skills because you spend all night calculating how much sleep you’ll get if you’re able to ‘fall asleep right now." . "<br><br>"; 
}
//If else today is Tuesday, a message will display 
else if($today == "Tuesday")
{
    echo "Today is Tuesday" . "<br><br>";
    echo "Life is like an ice-cream. Enjoy it before it melts!" . "<br><br>";
}
//If else today is Wednesday, a message will display 
else if($today == "Wednesday")
{
    echo "Today is Wednesday" . "<br><br>";
    echo "Somedays you eat salad and work out. Somedays you have cupcakes and pizza. It’s called balance." . "<br><br>";
}
//If else today is Thursday, a message will display 
else if($today == "Thursday")
{
    echo "Today is Thursday, Almost through the week!" . "<br><br>";
    echo "Life is like an elevator – Sometimes it stops. But it’ll move up again!" . "<br><br>";
}
//If else today is Friday, a message will display 
else if($today == "Friday")
{
    echo "ITS FRIDAY!!" . "<br><br>";
    echo "Life is like experiments. The more you try, the better you become!" . "<br><br>";
}
//If else today is Saturday or Sunday, a message will display 
else if($today == "Saturday" || $today == "Sunday")
{
    echo "Welcome to the weekend!" . "<br><br>";
    echo "Life is like a roller coaster pic – scary at the moment, funny looking back!" . "<br><br>";
}
?> 
</body></html>   