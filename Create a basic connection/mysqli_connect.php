<?php

$dbc = mysqli_connect("localhost", "root", "Theiceman34$", "sitename" );

//check connection
if($dbc == false)
{
    die("ERROR: Could not connect. " .mysqli_connect_error());
}

//print host info
echo "Connect Successfully. Host info: " . mysqli_get_host_info($dbc);

?>