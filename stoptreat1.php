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
Select the patient to stop been treated: <br>
<form action="stoptreat2.php" method="post">
<?php
   $docLicNum= $_POST["dr"];
   $query = 'SELECT patient.firstName, patient.lastName, patient.ohip FROM patient, treats WHERE treats.docLicNum="'.$docLicNum.'" AND treats.ohip=patient.ohip';
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo "<input type='radio' name='patient' value='" . $row["ohip"] . "'>" . $row["firstName"] . " " . $row["lastName"] . "<br>";
   }

   mysqli_free_result($result);


?>
<input type="submit" value="Select patient">
</form>
<p>
<h2>Go back to the main page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>

<p>
<h2>Go back to the before previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/stoptreat.php"> Click here</a>


</body>
</html>

