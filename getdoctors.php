<!DOCTYPE html>
<html>
<head>
<title>a3yassin</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1>Select a doctor :</h1>
<form action="getdoctorsinformation.php" method="post">
<?php
   $radioVal= $_POST["sorts"];
   if ($radioVal=="1"){
     $query = 'SELECT firstName, lastName, docLicNum FROM doctor ORDER BY firstName ASC';
   } else if ($radioVal=="2") {
     $query = 'SELECT firstName, lastName, docLicNum FROM doctor ORDER BY firstName DESC'; 
   } else if ($radioVal=="3") {
     $query = 'SELECT firstName, lastName, docLicNum FROM doctor ORDER BY lastName ASC';
   } else if ($radioVal=="4") {
     $query = 'SELECT firstName, lastName, docLicNum FROM doctor ORDER BY lastName DESC';
   }
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo "<input type='radio' name='doctors' value='" . $row["docLicNum"] . "'>" . $row["firstName"] . " " . $row["lastName"] . "<br>";
   }

   mysqli_free_result($result);
     

?>
<input type="submit" value="Get Doctor information">
</form>

<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>

<?php
   mysqli_close($connection);
?>
</body>
</html>
