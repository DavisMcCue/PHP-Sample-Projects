<!DOCTYPE html>
<html lang="en">
    <meta charset ="utf-8">
<head>
	<title>Calendar Form</title>
</head>
<body>
<form action = "calendar.php" method = "post"></form>
      
<?php
    
$months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novemeber', 'December' ];
  
    //Months pulldown
    echo '<select name = "month">';
        foreach ($months as $key => $value)
        {
            echo "<option value = \"$key\" > $value </option>\n";
        }
        echo '</select>';
    
    //Day pulldown
    echo '<select name = "day">';
        for ($day = 1; $day <= 31; $day++)
        {
            echo "<option value = \"$day\" > $day </option>\n";
        }
    echo '</select>';
    
    //Year pulldown
    echo '<select name = "years">';
        for ($year = 2018; $year <= 2028; $year++)
        {
            echo "<option value = \"$year\" > $year </option>\n";
        }
    echo '</select>';
?>
</body>
</html>