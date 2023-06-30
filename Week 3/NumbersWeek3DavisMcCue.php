<!DOCTYPE html>
<html lang="en">
    <meta charset ="utf-8">
<head>
	<title>Writing Numbers</title>
    <h1>Number Examples</h1>
</head>
<body>
    
<?php
echo "<h2>Activity #1</h2>";
    
$calendar = array('2018-02-01', '2018-02-02', '2018-02-03');
echo "Latest Date: ". max($calendar)."\n";
echo "<br>";
echo "Earliest Date: ". min($calendar)."\n";
?>

<?php
    echo "<h2>Activity #2</h2>";

    $firstNumber = 247;
    $secondNumber = 26;

    echo "<p>The  value of variable 1 is $firstNumber &  variable 2 is $secondNumber</p>";

    $result = $firstNumber % $secondNumber;

    echo "<p>The modulus of these numbers  is $result</p>";
?>

    
<?php
    echo "<h2>Activity #3</h2>";
    
    $numberchoosen=55;
        if($numberchoosen % 2 ==0)
        {
            echo " $numberchoosen is a even number ";
        }
        else
        {
            echo " $numberchoosen is an odd number ";
        }
    
     echo "<h2>Guided Activity Number Modified! #3</h2>";
     /*created a array with strings for print and then used the built in implode method to
     join the string together so they can be printed to the screen.*/
     $arr = array("This", "is", "the", "random", "numbers", "generator:");
     echo implode(" ", $arr );
     /*Created two varibles  and stored random numbers each time you hit the refresh button and then they are added/sum into the results variable
     then we see if it is an even or an odd random number*/
     $newnumber1 = rand()%100; 
     $newnumber2 = rand()%1000;
    
     $results = $newnumber1 + $newnumber2;
    
        if($results % 2 ==0)
        {
            echo " $results is a even number ";
        }
        else
        {
            echo " $results is an odd number ";
        }
    
    
?>
    
<?php
    echo "<h3>Activity #4</h3>";
    
        function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){ 
        $pi = pi(); 
        $x = sin($latitudeFrom * $pi/180) * 
        
        /*The sin() function returns the sine of a number.*/
        sin($latitudeTo * $pi/180) + 
        
        /*The cos() function returns the cosine of a number.*/
        cos($latitudeFrom * $pi/180) * 
        cos($latitudeTo * $pi/180) * 
        cos(($longitudeTo * $pi/180) - ($longitudeFrom * $pi/180)); 
        $x = atan((sqrt(1 - pow($x, 2))) / $x); 
        return abs((1.852 * 60.0 * (($x/$pi) * 180)) / 1.609344); 
        } 
        // Distance from New York to London
        echo lat_long_dist_of_two_points(40.7127, 74.0059, 51.5072, 0.1275).'is the distance in miles from New York to London.'."\n"; 
?>
    
<?php
    echo "<h3>Activity #5</h3>";
   
        $sum = 0;
        for($x=1; $x<=80; $x++)
        {
            $sum +=$x;
        }
        echo "The sum of the numbers 0 to 80 is: $sum"."\n";
 ?>
 
</body>
</html>   