<html>
    <head>
        <title>my home</title>
</head>
    
 <body>
     <h1>Registration Form </h1>
 <form action ="../control/process.php" method="post">
     <table>
         <tr><td>First Name :  </td> 
         <td> <input type="text" placeholder="FirstName" name="fname"></td></tr>
         
         <tr><td>Last Name :  </td>  
         <td> <input type="text" placeholder="LastName" name="Lname"></td></tr>
         <tr><td>Age :  </td>  
         <td> <input type="text" placeholder="Age" name="age"></td></tr>

         <tr><td>Designation :  </td>
         <td><input type="radio" name="designation" value="Junior Programmer">Junior Programmer
         <input type="radio" name="designation" value="Senior Programmer">senior Programmer
         <input type="radio" name="designation" value="Project Lead">Project Lead</td></tr>


         <tr><td>Preferred Language :  </td>
         <td><input type="checkbox" name="preferredlanguage" value="JAVA">JAVA
         <input type="checkbox" name="preferredlanguage" value="C++">c++
         <input type="checkbox" name="preferredlanguage" value="PHP">PHP</td></tr>

         <tr><td>Email :  </td> 
         <td> <input type="text" placeholder="Email" name="email"></td></tr>
         <tr><td>Password :  </td> 
         <td> <input type="text" placeholder="password" name="password"></td></tr>

         <tr><td>Please Choose a files :  </td>  
         <td><input type="file" id="myfile" name="myfile"> </td></tr>

         <tr><td> <input type="submit" name="submit" value ="submit">
         <input type="reset" name="reset" value ="reset"></td></tr>

</table>
</form>
</body>

</html>


