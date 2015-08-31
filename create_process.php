<?php 
include('DBConnection.php');
										
					if (isset($_POST['register'])) { 
					
		
						 $check1 = mysql_query("SELECT * FROM user WHERE username = '$_POST[username]'")
						or die(mysql_error());
						 $check2 = mysql_num_rows($check1);
						 if ($check2 != 0) {
						 die('Sorry, the Username.  '.$_POST['username'].' is already in use!' . " " . 'or' .  " " . " " .'Please try again..' );
						}
 	
		extract($_POST); 	
		
	$password = md5($_POST['password']);
	$query = "INSERT INTO user (name, username, password, date_reg) VALUES ('$fname', '$username', '$password', NOW())";
	$result = mysql_query($query) or die ("Error in query: " . mysql_error());
	
	
	
if($result)	{
						//print out the result
						echo"<script language='javascript'>alert('Registration Successful');window.location.href='login.php'</script> ";
								}
					      	else
							    {
							echo  "Oops! Try again.";
							    }
}
 ?>