<?php



$name=$_REQUEST["fname"];

if(empty($name)){
    echo"<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else
{
    echo"<br>Your first name is ".$name;
}
$name1=$_REQUEST["Lname"];
if(empty($name1))
{
    echo"<br>Your last name should not be empty";
}
else if(strlen($name1)<4)
{
    echo "<br>last name should be more than 4 characters";
}
else
{
    echo"<br>Your last name is ".$name1;
}

if(isset($_REQUEST["designation"]))
{
    $designation=$_REQUEST["designation"];
    echo "<br>Your designation is ".$designation;
}
else
{
    echo "<br>You must select designation";
}

if(isset($_REQUEST["ch1"]) || isset($_REQUEST["ch2"]) || isset($_REQUEST["ch3"]))
{
    if(isset($_REQUEST["ch1"]) && isset($_REQUEST["ch2"]) && isset($_REQUEST["ch3"]) )
    {
        echo "<br> You have selected ".$_REQUEST["ch1"]." and ".$_REQUEST["ch2"]." and ".$_REQUEST["ch3"];
    }
    else if(isset($_REQUEST["ch1"]) && isset($_REQUEST["ch2"]))
    {
        echo "<br> You have selected ".$_REQUEST["ch1"]." and ".$_REQUEST["ch2"];
    }
    else if(isset($_REQUEST["ch2"]) && isset($_REQUEST["ch3"]))
    {
        echo "<br> You have selected ".$_REQUEST["ch2"]." and ".$_REQUEST["ch3"];
    }
    else if(isset($_REQUEST["ch1"]) && isset($_REQUEST["ch3"]))
    {
        echo "<br> You have selected ".$_REQUEST["ch1"]." and ".$_REQUEST["ch3"];
    }
    else if(isset($_REQUEST["ch1"]))
    {
        echo "<br> You have selected ".$_REQUEST["ch1"];
    }
    else if(isset($_REQUEST["ch2"]))
    {
        echo "<br> You have selected ".$_REQUEST["ch2"];
    }
    else
    {
        echo "<br> You have selected ".$_REQUEST["ch3"];
    }
}
else{
    echo "<br>You must select preferred language";
}
$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    echo "<br>you must enter a valid email";
}
else
{
    echo "<br>your email is ".$email;
}

if(is_numeric($_REQUEST["password"])>=1){
    echo "<br>Your password is valid";
}
else
{
    echo "<br>Your password must contain 1 numerical value";
}

?>