<?php

include 'connect2.php';



$var1 = $_POST['d_user_id'];

$var2 = $_POST['d_password'];

$var3 = $_POST['sumbit'];


if($var1 == null || $var2 == null)
echo "Please fill in all the details";	

else 
{
$f = 0;
$qry = mysql_query("SELECT * FROM doctors WHERE ID='$var1'");

while($person = mysql_fetch_array($qry)) {
	
	$f = 1;
	
	$first = $person['ID'];
	
	$second = $person['Name'];
	
	$third = $person['Password'];
 	

}
if($f == 0)
	echo "Check your ID/Password";
else
{
	
	
	
	if($var2 != $third){
		echo "Check your ID/Password";
        
    }
	else if($third == $var2)
    {
		if($var1 == 101326){
			header('Location: doctor1.html');
		}
		else if($var1 == 101327){
			header('Location: doctor2.html');
		}
		else{
			header('Location: doctor3.html');
		}
    }
}

}
?>