<!--
Name: Davis McCue
Date: 3/23/2023
Description: Connects the pages to the database and the table within it.-->


<?php

//variables
$db_host = 'localhost'; //Server Name
$db_user = 'root'; //username
$db_pass = 'Theiceman34$';
$db_name = 'coolwebsite_dm';


$dbc = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Couldnt connect to MySQL') .mysqli_connect_error();

//set encoding

mysqli_set_charset($dbc, 'utf8');
