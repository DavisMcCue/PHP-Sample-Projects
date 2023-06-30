<!DOCTYPE html>
<html lang="en">
    <meta charset ="utf-8">
<head>
	<title>Working with Strings</title>
</head>
<body>
<!--php script-->
<?php
    echo '<h2> Guided Activity Number #1 </h2>'; 
    echo 'Tomorrow I \'ll learn PHP global variables.'."\n"; 
    echo '<p> Do you know what this command does? ~del c"\*.* </p>';
    echo 'Its a shame we never seem to accomplish all of our daily task. Why do you suppose that is the case?'
?>
    
<?php
    $var = 'PHP Tutorial';
    echo '<h2> Guided Activity Number #2 </h2>';
?>
    <h3><?php echo $var; ?></h3>   
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting languages. It is a cross-platform, HTML embedded server-side scripting languages and is especially suited for web development!</p>
    <p>Check out this site for excellent PHP techniques: <a href="https://www.w3schools.com/php/">Go to the <?php echo $var; ?></a>.</p>
 
<?php
    
    echo '<h2> Guided Activity Number #3 </h2>';
    /*Using a for-loop to cycle through the range of letter between A and Z and store them in a letter varible and echo it to the screen with a space between them and it will stop once it hits Z*/
    foreach(range('A', 'Z') as $letters)
    {
        echo $letters . ", ";    
    }
?>
    
<?php
    echo '<h2>Guided Activity Number #4</h2>';
    $String = 'If it’s important to you, you\’ll find a way. If not, you\’ll find an excuse.';
    
    echo implode(' ', array_slice(explode(' ', $String), 0, 5))."\n";
?>
    
<?php
    echo '<h2>Guided Activity Number #5</h2>';
    $numberString = "2,543.12";
    
    $newNumberstring = str_replace( ',', '', $numberString);
    
     if( is_numeric($newNumberstring))
     {
        echo $newNumberstring."\n";
     }
    
    echo '<h2>Guided Activity Number Modified! #5</h2>';
    
    /*created an array list of 3 number. 1 from the activity above and the other 2 made up. I then made them into a list and stored them into
    the variables created then I echo the results then took the stored data and removed the , then used the sum to check if it a numeric and then printed to screen*/
    
    $newArrayList = array("2,543.12", "11,433.12","100,543.12");
    list($Item1, $Item2, $Item3) = $newArrayList;
    echo "\n Here are my last bank statements, $$Item1, $$Item2, and $$Item3.\r\n";
    
    $newNumberstring1 = str_replace( ',', '', $Item1);
    $newNumberstring2 = str_replace( ',', '', $Item2);
    $newNumberstring3 = str_replace( ',', '', $Item3);
    
    $sum = $newNumberstring1 + $newNumberstring2 + $newNumberstring3;
    
     if( is_numeric($newNumberstring))
     {
        echo "\n The Sum of withdraw from the Spending Account: $$sum.\n";
     }

?>
    
<?php
    echo '<h2>Guided Activity Number #6</h2>';    
    
    for ($i = 1; $i < 13; $i++)
        {
         
          for ($j = 1; $j < 13; $j++) 
            {
               if ($j == 1) 
                {
                    echo str_pad($i * $j, 2, " ", STR_PAD_LEFT);
                } 
               else 
               {
                    echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
                }
            }
                    echo "<br>";
        }
    ?>
    
    
    
</body>
</html> 
    
    
    
    
    