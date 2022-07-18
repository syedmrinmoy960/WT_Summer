<?php
class mydb{


    //creat conncection open function
    function openCon(){

        $dbservername="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="secf";
        //creat connection
        $conn=new mysqli( $dbservername, $dbusername,$dbpassword, $dbname);
        
        if($conn->connect_error){
          echo"con object failed";
        }

    }

    
    //creat value insert function
    function insertreg($conn,$Firstname,$Lastname,$Age,$Adminusername,$password,$confrimpassword,$Number,$Gender,$Dateofbirth,$maritalstatus,$Bloodgroup){


    $tablename="adminreg";
   
    // $Firstname="hello";
    // $Lastname="world";
    // $Age=12;
     
    $sqlstr="INSERT INTO $tablename(Firstname,Lastname,Age,Adminusername,password,confrimpassword,Number,Gender,Dateofbirth,maritalstatus,Bloodgroup) VALUES ('$Firstname','$Lastname','$Age','$Adminusername','$password','$confrimpassword','$Number','$Gender','$Dateofbirth','$maritalstatus','$Bloodgroup')";
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




//   $dbservername="localhost";
//   $dbusername="root";
//   $dbpassword="";
//   $dbname="secf";
//   //creat connection
//   $conn=new mysqli( $dbservername, $dbusername,$dbpassword, $dbname);
  
//   if($conn->connect_error){
//     echo"con object failed";
//   }
//   $tablename="adminreg";
 
//   $Firstname="hello";
//   $Lastname="world";
//   $Age=12;
   
//   $sqlstr="INSERT INTO $tablename(Firstname,Lastname,Age,) VALUES ('$Firstname','$Lastname',$Age)";
//   if($conn->query($sqlstr)){

//     echo"Data inserted";
//   }
//   else{
//     echo"data not inserted".$conn->error;
//   }
//   $conn->close(); //connection closed
?>