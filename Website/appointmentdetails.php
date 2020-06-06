<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="images/logo1.png"/>
<title>Appointment Details</title>

<style type="text/css">

a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FF0000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
</style>


<link rel="stylesheet" type="text/css" href="inner.css">
</head>
<ul id="nav">
	  <li><a href="home.html"><img src="images/logo1.png" width="150" height="70"></a></li>
	  <li><a href="home.html">Home</a></li>
      <li><a href="doctors.html">Doctor Panel</a></li>
      <li><a href="facilities.html">Facilities</a></li>
      <li><a href="diseasesinformation.html">Disease Information</a></li>
      <li><a href="specialization.html">Specialization</a></li>
	  <li><a href="gallery.html">Gallery</a></li>
      <li><a href="patientlogin.html">Patient Login</a></li>
	  <li><a href="doctorlogin.html">Doctor Login</a></li>
	  <li><a href="contactus.html">Contact Us</a></li>
   </ul>
<div id="fadeshow1"></div>
<div id="middle">
	<center><h1>Appointment Details</h1></center>


	<table border=3 align="center">

<?php

include 'connect3.php';

$query = "SELECT * FROM Patient ID ORDER BY Date DESC LIMIT 1";


$result = mysql_query($query);

$data = mysql_fetch_array($result);
  echo("<tr><td><strong>Patient Name : </strong></td><td>$data[1]</td></tr>
  <tr><td><strong>Doctor: </strong></td><td>$data[2]</td></tr>
  <tr><td><strong>Date : </strong></td><td>$data[3]</td></tr>
  <tr><td><strong>Time: </strong></td><td>$data[4]</td></tr>");


?>

    </table>

</div>

</html>
