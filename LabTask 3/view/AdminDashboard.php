<?php
// session_start();
include("../control/adminloginprocess.php");
// if(!empty($_SESSION['firstname_error']))
// 							{echo $_SESSION['firstname_error'];}
// if($_SESSION['adusername']!=null){
// 	//echo"".$_SESSION['username'];
//     header("Location:AdminDashboard.php");
// }
setcookie("mycokie","hello user1",time()+3600);
if($_COOKIE["mycokie"]!="hello user1"){
	// echo "you have visited us before";
	echo"<br>you have never visited</br>";
}else{
	echo "<br>you have visited us before</br>";
	// echo"you have never visited";
}
if(!empty($_SESSION['firstname_error']))
							{echo $_SESSION['firstname_error'];}
?>
<html>
<head>
<h1>Admin Dashboard</h1>
</head>
<hr></hr>
<body>

  <table>
	<tr><th>
	<?php
	 echo"UserName : ".$firstname_error;
	
	
	?>
	<br>
	</tr></th>
	</table>

	

<tr><td align='center'><br>
					    <!-- Logout -->
						<a href="../control/logout.php">
						  LogOut
						</a>								
					</tr>
  
					

</body>

</html>
<!-- <h1>Admin Dashboard</h1> -->




