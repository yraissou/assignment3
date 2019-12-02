<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>a3yassin</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h2> List of hospitals: </h2>
<?php
   $query = 'SELECT name, firstName, lastName, headDocStartDate FROM hospital,doctor WHERE hospital.headDoc=doctor.docLicNum ORDER BY name';
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo "Name : "  . $row["name"]. "<br>";
     echo "First name of the head doctor : "  . $row["firstName"]. "<br>";
     echo "Last name of the head doctor : "  . $row["lastName"]. "<br>";
     echo "The doctor's start date as a head : "  . $row["headDocStartDate"]. "<br>";
     echo "<br>";

   }

   mysqli_free_result($result);


?>
<?php
   mysqli_close($connection);
?>
<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>


</body>
</html>

