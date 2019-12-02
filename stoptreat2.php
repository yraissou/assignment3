<!DOCTYPE html>
<html>
<head>
<title>a3yassin</title>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Stoping doctor from treating patient</h1>
<?php
   $docLicNum= $_POST["dr"];
   $ohip = $_POST["patient"];
   $query = 'DELETE FROM treats WHERE docLicNum="'.$docLicNum.'" AND ohip="'.$ohip.'"'  ;
   if (!mysqli_query($connection, $query)) {
        die("Error: delete failed" . mysqli_error($connection));
    }
   echo "The doctor was stoped from treating the patient !";
   mysqli_close($connection);
?>
<p>
<h2>Go back to the main page(1/4)</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>

<p>
<h2>Go back to the before previous page (2/4)</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/stoptreat.php"> Click here</a>


<p>
<h2>Go back to the previous page (3/4)</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/stoptreat1.php"> Click here</a>

</body>
</html>

