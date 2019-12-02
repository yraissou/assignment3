<!DOCTYPE html>
<html>
<head>
<title>a3yassin</title>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Assigning doctor to treat a patient</h1>
<?php
   $docLicNum= $_POST["dr"];
   $ohip = $_POST["patient"];
   $query = 'INSERT INTO treats values("' .$ohip . '","' .$docLicNum . '")'; 
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "The doctor was assigned to treat the patient !";
   mysqli_close($connection);
?>
<p>
<h2>Go back to the main page(1/4)</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>

<p>
<h2>Go back to the before previous page (2/4)</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/assigndoctor.php"> Click here</a>


<p>
<h2>Go back to the previous page (3/4)</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/treatpatient.php"> Click here</a>



</body>
</html>

