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
<h1>Here are the doctor's informations:</h1>
<?php
   $whichDoctor= $_POST["doctors"];
   $query = 'SELECT * FROM doctor WHERE docLicNum="' . $whichDoctor . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "License number : " . $row["docLicNum"]."<br>";
        echo "First name : " . $row["firstName"]."<br>";
	echo "Last name : " . $row["lastName"]."<br>";
	echo "Speciality : " . $row["speciality"]."<br>";
	echo "License date : " . $row["licenseDate"]."<br>";
	echo "Works at the hospital : " . $row["hosWorksAt"]."<br>";

     }
     mysqli_free_result($result);
?>

<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/getdoctors.php"> Click here </a>
<p>
<h2>Go back to the main page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here </a>



<?php
   mysqli_close($connection);
?>
</body>
</html>
