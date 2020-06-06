<?php

include 'connect1.php';

$username = $_POST['p_username'];

$emailid = $_POST['p_email_id'];

$pass1 = $_POST['p_password'];

$pass2 = $_POST['p_re_password'];

$sumbit = $_POST['sumbit'];



if($username != null && $emailid != null && $pass1 != null && $pass2 != null)
{
if(!$sumbit)
{
	
	
	echo "This is not happening.";
	header('Location: logintest.php');
}
else if($pass1 != $pass2)
{
    
    echo "Passwords are not Matching";
}
else if($username != null && $pass1 != null){
	
mysql_query("INSERT INTO patients(`Username`,`Emailid`,`Password`)
		   VALUES('$username','$emailid','$pass1')") or die("There is an error");

		   
		   
           echo "Sign up successful";
		   header('Location: patientlogin.html');
}
}
else
	
	
	echo "Please fill in the details";
?>