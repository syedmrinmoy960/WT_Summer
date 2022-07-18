<?php
include("../model/db.php");
if(isset($_REQUEST["Submit"])){

//  $mydb=new mydb();
//  $connob=$mydb->openCon();
//  $mydb->insertreg($connob,"employee",$_POST["fname"],$_POST["lname"],$_POST["radio"],$_POST["checkbox"],$_POST["email"],$_POST["password"],$_POST["myfile"]);




$fname1 = $_POST["fname"];
$name2="";
$name=$_REQUEST["fname"];
$name3=$_REQUEST["lname"];
if(empty($fname1))
{
    //echo "You haven't entered your first name!";
    $name2="You haven't entered your first name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname1))
    {
        echo "Please remove numeric numbers from your first name!";
        echo "<br>";
    }
    else
    {
        echo "Your first name is: ".$fname1;
        echo "<br>";
    }
}

$lname = $_POST["lname"];
if(empty($lname))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        echo "Your last name is: ".$lname;
        echo "<br>";
    }
}

$age = $_POST["age"];
echo "Your Age is: ".$age;
echo "<br>";



if (isset( $_POST["radio"]) )
{
    $designation = $_POST["radio"];
    echo "You have selected as: " .$designation;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    echo "<br>";
}

$PL="";
if (isset($_POST["java"]) || isset($_POST["php"]) || isset($_POST["cpp"]))
{
    if (isset($_POST["java"]) && isset($_POST["php"]) && isset($_POST["cpp"]))
    {
        echo "You have selected: JAVA PHP C++ ";
        echo "<br>";
        $PL=$_POST["java"].",".$_POST["php"].", ".$_POST["cpp"];

    }

    elseif (isset($_POST["php"]) && isset($_POST["java"]) )
    {
        echo "You have selected: PHP and Java";
        echo "<br>";
        $PL=$_POST["php"].",".$_POST["java"];
    }
    elseif (isset($_POST["cpp"]))
    {
        echo "You have selected: C++";
        echo "<br>";
        $PL=$_POST["cpp"];
    }
}
else
{
    echo "Please select a checkbox!";
    echo "<br>";
}

$email = $_POST["email"];
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
{
    echo "Invalid email";
    echo "<br>";
}
else
{
    echo "Your email is ".$email;
    echo "<br>";
}

$password = $_POST['password'];
if (strlen($password) < 8)
{
    echo "Please Enter a valid password!";
    echo "<br>";
}
else
{
    echo "Your given password is: ".$password;
    echo "<br>";
}


 //for files uploads code here
  echo $_FILES["myfile"]["name"];//return file name
 
  if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads".$_FILES["myfile"]["name"])){
      echo "FILES UPLOADED";
  }
  else{
      echo"<br>File not uploaded";
  }
  
  //creat array 

//   $mydata =array(
//       'firstname'=>$name,
//       'LastName'=>$name3,
//       'password'=>$_REQUEST["password"],
//       'file'=>$_FILES["myfile"]["name"],
//       'mycheckbox'=> $PL
     
//   );


//   $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);
//   if(file_put_contents ("../data/data.json",$jsondata)){
//       echo"Save data";
//   }

$mydb=new mydb();
$connob=$mydb->openCon();
$mydb->insertreg($connob,"employee",$_POST["fname"],$_POST["lname"],$_POST["radio"],$_POST["checkbox"],$_POST["email"],$_POST["password"],$_POST["myfile"]);

}
?>