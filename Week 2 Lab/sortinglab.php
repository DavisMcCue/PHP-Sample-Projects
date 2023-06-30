<!-- 
Name: Davis McCue
Date: 2/2/2023
Description: Sort videogames in Orignal order, Descending and Ascending Order, and Sorts by Title of data that user has set within the code.
File Name: Sortinglab.php -->

<!doctype html>
<html lang ="en">

<head>
    <meta charset="utf-8">
    <title>Sorting Arrays</title>
    
    <!-- PHP/CSS file -->
    <link rel="stylesheet" href="CSS%20StyleSheet.CSS" media="screen">
    
    
    </head>
    <body>
    <table border="0" cellspacing ="3"
    cellpadding="3" align="center">
    <thread>
    <div id ="rainbowBox">
     <tr>
        <th><h2 class = "colorRating">Rating</h2></th>
        <th><h2 class = "colorTitle">Title</h2></th>  
    </tr>
    </div>
    </thread>
    <tbody>
        
    <?php # script 2.8 - sorting.php
    //Creating the Array

    $videogames = [
        'World Of Warcraft' => 10,
        'Call Of Duty: World At War' => 5,
        'Jackbox Games' => 9,
        'Dead By Daylight' => 7,
        'Outlast' => 11, 
        'Mario Party' => 1
    ];
        
        
   //Display the movies in their original order:
    

    echo '<tr><td colspan="2">
    <strong> In their Orginal Order:
    </strong></td></tr>';
    foreach ($videogames as $title => $rating)   
    {
        echo "<tr><td>$rating</td>
        <td>$title</td></tr>\n";
    }
    ksort($videogames);
    echo '<tr><td colspan="2">
    <strong> Sorted by Title:
    </strong></td></tr>';
    foreach ($videogames as $title => $rating)    
    {
        echo "<tr><td>$rating</td>
        <td>$title</td></tr>\n";
    }
    arsort($videogames);
        
    echo '<tr><td colspan="2">
    <strong> Sorted by Rating in Descending Order :
    </strong></td></tr>';
    foreach ($videogames as $title => $rating)    
    {
        echo "<tr><td>$rating</td>
        <td>$title</td></tr>\n";
    } 
    natsort($videogames);
    echo '<tr><td colspan="2">
    <strong> Sorted by Rating in Ascending Order:
    </strong></td></tr>';
    foreach ($videogames as $title => $rating)    
    {
        echo "<tr><td>$rating</td>
        <td>$title</td></tr>\n";
    } 
    /* shuffle($videogames);
    echo '<tr><td colspan="2">
    <strong> Sorted by Rating :
    </strong></td></tr>';
    foreach ($videogames as $title => $rating)    
    {
        echo "<tr><td>$rating</td>
        <td>$title</td></tr>\n";
    } */
        
    ?>    
        
    </tbody>
    </table>
    </body>   
</html>