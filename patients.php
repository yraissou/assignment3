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
<h2>Patient informations: </h2>
<?php
   $ohip= $_POST["OHIP"];
   $query = 'SELECT patient.firstname as fn, patient.lastname as ln, doctor.firstName as drfn, doctor.lastName as drln FROM patient, treats, doctor WHERE patient.ohip="'.$ohip.'" AND treats.ohip="'.$ohip.'" AND treats.docLicNum=doctor.docLicNum';
   $result=mysqli_query($connection,$query);
   if (!$result) {
   	die("OHIP number doesn't exist !");
   }
   while ($row=mysqli_fetch_assoc($result)) {
   	echo "Patient's first name  : " .$row["fn"] ."<br>";
    	echo "Patient's last name  : " .$row["ln"] ."<br>";
     	echo "The doctor's first name who treats this patient  : " .$row["drfn"] ."<br>";
     	echo "The doctor's last name who treats this patient  : " .$row["drln"] ."<br>";
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

