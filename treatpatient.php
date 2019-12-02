<!DOCTYPE html>
<html>
<head>
  <title>a3yassin</title>
</head>
<body>
<?php
  include "connecttodb.php";
?>
<h2> Assign the patient to be treated by the doctor selected:</h2>
Select the patient: <br>
<form action="assigntreat.php" method="post">
<?php
   $query = 'SELECT firstname, lastname, ohip FROM patient';
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo "<input type='radio' name='patient' value='" . $row["ohip"] . "'>" . $row["firstname"] . " " . $row["lastname"] . "<br>";
   }

   mysqli_free_result($result);


?>
<input type="submit" value="Assign patient">
</form>


<p>
<h2>Go back to the main page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>

<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/assigndoctor.php"> Click here</a>


<?php
  mysqli_close($connection);
?>
</body></html>

