<?php
include_once('../dbconnection.php');
if(isset($_POST['stusignup']) isset($_POST['stuname']) isset($_POST['stuemail']) isset($_POST['stupass'])){
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];
}
?>