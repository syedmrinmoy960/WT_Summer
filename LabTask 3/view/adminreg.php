<!-- <h1>whatsup</h1> -->
<?php
include("../control/adminregprocess.php");
// .error {color: #FF0000;}
// error.
?>


<html>
    <head>
        <title>my home</title>
        
    </head>

    <body>
        <h1>Admin Registration</h1>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
            <!-- <tr><td align='center'></td></tr> -->
           <tr><td> First Name</td><td> <input type="text" name="fname" placeholder="First Name">
           
            
          
           <?php
           echo"".$name2;
           ?>
         </td></tr>
           <td>
          
           </td>
           
           <tr><td> Last Name </td><td> <input type="text" name="lname" placeholder="Last Name"> 
           <?php
           echo"".$name3;
           ?>
          
          </td></tr>
           <tr><td> Age </td><td> <input type="text" name="age"placeholder="Age" >
           <?php
           echo"".$erage;
           ?>
          
          </td></tr>
           <tr><td> AdminUserName </td><td> <input type="text" name="adusername" placeholder="UserName"> 
           <?php
           echo"".$eruser;
           ?>
          
          </td></tr>
           <tr><td> password</td><td> <input type="password" name="password"placeholder="Password" >
           <?php
           echo"".$erpass;
           ?>
          
          
          </td></tr>
           <tr><td> Confrim password</td><td> <input type="password" name="conpassword"placeholder="ConfrimPassword" >
           <?php
           echo"".$erconpass;
           ?>
          
          </td></tr>
           <tr><td> Contact Number </td><td> <input type="text" name="number" placeholder="Number"> 
           <?php
           echo"".$ernum;
           ?>
          
          </td></tr>
           <tr><td> E-mail </td><td> <input type="email" name="email" placeholder="Email">
           <?php
           echo"".$eremail;
           ?>
          
          </td></tr>
           <tr><td>
           Gender :
           </td><td>
           <input type="radio" name="radio" value="male">Male
           <input type="radio" name="radio" value="female">Femail
           <input type="radio" name="radio" value="others">Other
           <?php
           echo"".$ergender;
           ?>

           </td></tr>
           <tr><td> DateOfBirth </td><td> <input type="date" name="dob"> 
          
           <?php
           echo"".$erdate;
           ?>
          
          </td></tr>
           <!-- <tr><td>
           Divison(Zone):
           </td><td>
           <input type="checkbox" name="dhaka" value="ch1">Dhaka
           <input type="checkbox" name="khulna" value="ch2">Khulna
           <input type="checkbox" name="chattagram" value="ch3">Chattagram
           <input type="checkbox" name="sylhet" value="ch4">Sylhet
           <input type="checkbox" name="rahsjahi" value="ch5">Rajshahi
           </td></tr> -->
           <tr><td>
           Marital Status:
           </td><td>
           <input type="radio" name="radio1" value="single">Single
           <input type="radio" name="radio1" value="Marriad">Marriad
           <input type="radio" name="radio1" value="others">Others
           <?php
           echo"".$erstatas;
           ?>
           </td></tr>
             <tr><td>
                Blood Group :
                <tr><td>                
             <td> <select name="select">
             <option value="null">null</option>
           <option value="A+">A+</option>
            <option value="AB+" selected>AB+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB-">AB-</option>
            </select>
</td>
           <?php
           echo"".$erblood;
           ?>
          </td></tr>
            <tr><td>Please Select Your Photo : </td>  
            
         <td><input type="file" id="myfile" name="myfile"> </td></tr>
            <tr><td> <input type="Submit"name="Submit" value="Submit" >
            <input type="Reset"  ></td></tr>

             <tr><td></td></tr>
            <tr><td>
         <?php
           echo"".$aller;
           ?>
           </td></tr>
            <td>
            <a href="Home.php">
							go to Home
             </a></td>		
            </table>
        </form>

    </body>
</html> 
