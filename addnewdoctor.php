<!DOCTYPE html>
<html>
<head>
<title>a3yassin</title>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Doctor adding</h1>
<?php
   $docLicNum= $_POST["docLicNum"];
   $firstName = $_POST["firstName"];
   $lastName =$_POST["lastName"];
   $speciality = $_POST["speciality"];
   $licenseDate = $_POST["licenseDate"];
   $hosWorksAt = $_POST["hospital"];
   $query = 'INSERT INTO doctor values("' . $docLicNum . '","' . $firstName . '","' . $lastName . '","' . $speciality . '","' . $licenseDate . '","' . $hosWorksAt . '")';
   if (!mysqli_query($connection, $query)) {
        die("License number already exists");
   }
   echo "Your doctor was added!";
   mysqli_close($connection);
?>
<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>
</body>
</html>
