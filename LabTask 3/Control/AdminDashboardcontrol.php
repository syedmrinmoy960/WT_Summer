<?php
session_start();
$ts="";
$adminname="";
$firstname_error="";
if(!empty($_SESSION['adminname'])){
    header("Location:../view/AdminDashboard.php");
}
$adminname=$_SESSION[ 'adminname'];
// $firstname_error=$_SESSION[ 'adminname'];
?>