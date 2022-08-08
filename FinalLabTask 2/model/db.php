<?php
class mydb{

   //fname	lname	age	designation	planguage	email	password	picture	

    //creat conncection open function
    function openCon(){

        $dbservername="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="LabTask 1";
        //creat connection
        $conn=new mysqli ( $dbservername, $dbusername,$dbpassword, $dbname);
        
        if($conn->connect_error){
          echo"con object failed";
        }

    }

    
    //creat value insert function
    function insertreg ($conn,$fname,$lname,$age,$radio,$checkbox,$email,$password,$myfile){


    $tablename="employee";
   
    // $Firstname="hello";
    // $Lastname="world";
    // $Age=12;
     
    $sqlstr="INSERT INTO $tablename (fname,lname,age,designation,planguage,email,password,picture) VALUES ('$fname','$lname','$age','$radio','$checkbox','$email','$password','$myfile')";
    if($conn->query($sqlstr)){
  
      echo"Data inserted";
    }
    else{
      echo"data not inserted".$conn->error;
    }
}  
  function conClose($conn){
    $conn->close(); //connection closed
  }

};

?>