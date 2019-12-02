<!DOCTYPE html>
<html>
<head>
  <title>a3yassin</title>
</head>
<body>
<?php
  include "connecttodb.php";
?>
<h2> Assign the doctor to treat a patient:</h2>
Select the doctor to assign: <br>
<form action="treatpatient.php" method="post">
<?php
   $query = 'SELECT firstName, lastName, docLicNum FROM doctor';
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo "<input type='radio' name='ddrr' value='" . $row["docLicNum"] . "'>" . $row["firstName"] . " " . $row["lastName"] . "<br>";
   }

   mysqli_free_result($result);


?>
<input type="submit" value="Assign doctor">
</form>

<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>


<?php
  mysqli_close($connection);
?>
</body></html>

