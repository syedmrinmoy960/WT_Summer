<!-- $msg=""; -->
<?php
// $msg="";
session_start();
if(!empty( $_SESSION['adminname'])){
	header("Location:../view/AdminDashboard.php"); 
}
$firstname_error = "";
 $msg="";
 $er=0;
 
if (isset($_POST['submit'])){
    	$data = file_get_contents('../data/data.json');
        $data_array = json_decode($data, true);
        if (empty($_POST["fname"]))
    
        

    
    
        if (isset($_POST['submit'])) {
        	$email=$_POST['adminname'];
        	$pass=$_POST['adpass'];
        	foreach ($data_array as $key => $value) {
        		if(($value['UserName']==$email) && ($value['password']==$pass))
        		{
					$firstname_error = $email; //
					$_SESSION['firstname_error']=$firstname_error;//
					
	    				 $_SESSION['adminname']=$value['adminname'];
						 $_SESSION['adpass']=$value['adpass'];
	    				 setcookie('mycokie', $value['adminname'], time() + (86400 * 5), "/");
	               	 header("Location:../view/AdminDashboard.php"); 
        			
        		}
				else{
                    
					//$_SESSION['mal']="error message";
					//$msg="UserName or pass is wrong ";
					$firstname_error = " your login system UserName & Password is Wrong";
					$_SESSION['firstname_error']=$firstname_error;
					//	break;
				  header("Location:../view/admin.php"); 
				  
				   //break;
				}
        	}
			
        	
        }
		
		
		
    }
    ?>