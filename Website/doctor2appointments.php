<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="images/logo1.png"/>
<title>Next Appointments</title>

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
	<center><h1>Your Next Appointments</h1></center>

	<table border=3 align="center">
	<tr>

        <td><strong><h3>Patient Name</h3></strong></td>
        <td><strong><h3>Date</h3></strong></td>
        <td><strong><h3>Time</h3></strong></td></tr>
     </tr>


<?php

include 'connect3.php';

$query = "SELECT Name,Date,Time FROM details WHERE Doctor='Dr.Hannah'";


$result = mysql_query($query);

while($data = mysql_fetch_row($result)){
  echo("<tr><td>$data[0]</td>
  <td>$data[1]</td>
  <td>$data[2]</td></tr>");
}

?>

    </table>

</div>

</html>
