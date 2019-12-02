<!DOCTYPE html>
<html>
<head>
<title>a3yassin</title>
</head>
<body>
<?php
   include 'connecttodb.php';
?>
<h1>Hospital's name updating</h1>
<?php
   $name = $_POST["name"];
   $hosCode = $_POST["hospital"];
   $query = 'UPDATE hospital SET name = "'.$name.'" WHERE hosCode = "'.$hosCode.'"';
   if (!mysqli_query($connection, $query)) {
        die("Error: update failed" . mysqli_error($connection));
    }
   echo "Your hospital's name was updated!";
   mysqli_close($connection);
?>
<p>
<h2>Go back to the previous page</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/file.php"> Click here</a>


</body>
</html>


