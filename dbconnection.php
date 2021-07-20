<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "ischool";

//Create the Connection Between Database
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

//Check Connection
if($conn->connect_error){
    die("Connection was Failed");

}

?>