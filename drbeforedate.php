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
<h1> Doctors licensed before the day entered:</h1>
<?php
   $date= $_POST["date"];
   $query = 'SELECT firstName, lastName, speciality, licenseDate FROM doctor WHERE licenseDate<"'.$date.'"';
   $result=mysqli_query($connection,$query);
   if (!$result) {
       die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
      echo $row["firstName"] . " " . $row["lastName"] ." " . $row["speciality"] . " " . $row["licenseDate"];
      echo "<br>";
   }
   mysqli_free_result($result);
   
?>
<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>


<?php
   mysqli_close($connection);
?>
</body>
</html>

