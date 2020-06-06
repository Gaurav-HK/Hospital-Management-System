<?php

include 'connect1.php';



$var1 = $_POST['p_username'];

$var2 = $_POST['p_password'];

$var3 = $_POST['sumbit'];


if($var1 == null || $var2 == null)
echo "Please fill in all the details";	

else 
{
$f = false;
$qry = mysql_query("SELECT * FROM patients WHERE Username='$var1'");

while($person = mysql_fetch_array($qry)) {
	
	$f = true;
	
	$first = $person['Username'];
	
	$second = $person['Emailid'];
	
	$third = $person['Password'];
 	
}

if($f == false)
	echo "Check your Username/Password";
else
{
	
	
	
	if($var2 != $third){
		echo "Check your Username/Password";
        
    }
	else if($third == $var2)
    {
		//echo "Successfully logged in";
        
        
        header('Location: bookappointment.html');
    }
}

}
?>