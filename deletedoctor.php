<!DOCTYPE html>
<html>
<head>
<title>a3yassin</title>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Doctor deleting</h1>
<?php
   $docLicNum= $_POST["dr"];
   $query = 'DELETE FROM doctor WHERE docLicNum="' . $docLicNum . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: delete failed" . mysqli_error($connection));
   }
   echo "The doctor was deleted!";
   mysqli_close($connection);
?>
<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>


</body>
</html>

