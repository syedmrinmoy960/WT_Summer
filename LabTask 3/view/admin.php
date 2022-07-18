<?php
	// session_start();
    include("../control/adminloginprocess.php");
	
	setcookie("mycokie","hello user1",time()+3600);
	if($_COOKIE["mycokie"]=="hello user1"){
		echo "you have visited us before";
	}else{
		echo"you have never visited";
	}
	// session_destroy();
?>
    

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		
	</head>
	<body>
	<h1 >Admin Login Form</h1>	<br>       
	 <hr></hr>

		<form action="../control/adminloginprocess.php" method="post">
			<table  >	
					<tr>
					<td>  AdminUserName   :<input type="text" name="adminname" placeholder="Enter your username" ></td></tr>
					<tr><td>AdminPassword :<input type="password" name="adpass" placeholder="Enter your password" ></td>

					</tr>
										
					<tr>
					<tr>
					<tr><td align='center'><br><input type="submit" name="submit" value="Login"></td></tr>
<!-- 		  
						<?php
						// {
						// 	if($_SESSION['mal']!=null)
						// 	{
						// 		echo "error";
						// 	}
						// }
						?> -->
						
					<tr><td align='center'><br>
					Don't have an account yet?
						<a href="adminreg.php">
							Create an account
						</a>								
					</tr>
					<tr><td align='center'><br>
					do you want to go home page?
						<a href="Home.php">
							Go to Home
						</a>								
					</tr>	
					 
						
				</table>		
		</form>
        <!-- header() -->

		<?php if(!empty($_SESSION['firstname_error']))
							{echo $_SESSION['firstname_error'];}?>
	</body>
</html>