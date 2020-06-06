<?php

include 'connect3.php';

$pname = $_POST['pn'];

$doctor = $_POST['d_choice'];

$time= $_POST['t_choice'];

$sumbit = $_POST['sumbit'];

$date=date("d/m/Y", time() + 86400);

if($doctor==1){
	if($time==1){
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Gaurav','$date','9 AM')") or die("There is an error");
	}
	else if($time==2){
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Gaurav','$date','2 PM')") or die("There is an error");
	}
	else{
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Gaurav','$date','7 PM')") or die("There is an error");
	}
}

else if($doctor==2){
	if($time==1){
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Hannah','$date','9 AM')") or die("There is an error");
	}
	else if($time==2){
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Hannah','$date','2 PM')") or die("There is an error");
	}
	else{
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Hannah','$date','7 PM')") or die("There is an error");
	}
}
else{
	if($time==1){
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Rashad','$date','9 AM')") or die("There is an error");
	}
	else if($time==2){
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Rashad','$date','2 PM')") or die("There is an error");
	}
	else{
		mysql_query("INSERT INTO details(`ID`,`Name`,`Doctor`,`Date`,`Time`)
		   VALUES(Null,'$pname','Dr.Rashad','$date','7 PM')") or die("There is an error");
	}
}


 header('Location: appointmentdetails.php');

?>
