<!DOCTYPE html>
<html>
<head>
<title>a3yassin</title>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h2> Stop treat:</h2>
Select the doctor to stop treating a patient: <br>
<form action="stoptreat1.php" method="post">
<?php
   $query = 'SELECT distinct firstName, lastName, doctor.docLicNum FROM doctor, treats WHERE doctor.docLicNum=treats.docLicNum';
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo "<input type='radio' name='dr' value='" . $row["docLicNum"] . "'>" . $row["firstName"] . " " . $row["lastName"] . "<br>";
   }

   mysqli_free_result($result);


?>
<input type="submit" value="Select doctor">
</form>
<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>


</body>
</html>
