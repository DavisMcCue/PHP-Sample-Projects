<?php

$link = mysqli_connect("localhost", "root", "Theiceman34$");

//check connection
if($link == false)
{
    die("ERROR: Could not connect. " .mysqli_connect_error());
}


//create a database
$sql = "Create Database myDemo_DavisMcCue";

if(mysqli_query($link, $sql))
{
    echo "Database Created Successfully!";
}
else
{
    echo "Error Creating A Database! " . mysqli_error($link);
}



//print host info
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

//close connection
mysqli_close($link);

?>