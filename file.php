<!DOCTYPE html>
<html>
<head>
  <title>a3yassin</title>
</head>
<body>
<?php
  include "connecttodb.php";
?>
<h2>Doctors</h2>
<form action="getdoctors.php" method="post">
You want the doctors ordered by  : <br>
<input type="radio" name="sorts" value="1"> firstName ascending <br>
<input type="radio" name="sorts" value="2"> firstName descending <br>
<input type="radio" name="sorts" value="3"> lastName ascending <br>
<input type="radio" name="sorts" value="4"> lastName descending <br>

<input type="submit" value="Get Doctors Names">
</form>

<p>
<hr>
<p>


<h2>Doctors licensed before a given date:</h2>
<form action="drbeforedate.php" method="post">
Enter a date (YYYY-MM-DD) : <input type="text" name="date"><br>
<input type="submit" value="Get doctors licensed before that date">
</form>

<p>
<hr>
<p>

<h2> Add a new doctor:</h2>
<form action="addnewdoctor.php" method="post">
New doctor's license number : <input type="text" name="docLicNum"><br>
New doctor's first name : <input type="text" name="firstName"><br>
New doctor's last name : <input type="text" name="lastName"><br>
New doctor's speciality : <input type="text" name="speciality"><br>
New doctor's license date : <input type="text" name="licenseDate"><br>
New doctor's hospital: <br>
<input type="radio" name="hospital" value="BBC">BBC<br>
<input type="radio" name="hospital" value="ABC">ABC<br>
<input type="radio" name="hospital" value="DDE">DDE<br>
<input type="submit" value="Add new doctor">
</form>

<p>
<hr>
<p>

<h2> Delete a doctor:</h2>
Select the doctor to delete: <br>
<form action="deletedoctor.php" method="post">
<?php
   $query = 'SELECT firstName, lastName, docLicNum FROM doctor';
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo "<input type='radio' name='dr' value='" . $row["docLicNum"] . "'>" . $row["firstName"] . " " . $row["lastName"] . "<br>";
   }

   mysqli_free_result($result);


?>
<input type="submit" value="Delete doctor">
</form>

<p>
<hr>
<p>

<h2> Update hospital's name:</h2>
<form action="updatehospital.php" method="post">
Select a hospital: <br>
<input type="radio" name="hospital" value="BBC">BBC<br>
<input type="radio" name="hospital" value="ABC">ABC<br>
<input type="radio" name="hospital" value="DDE">DDE<br>
New hospital's name : <input type="text" name="name"><br>
<input type="submit" value="Update name">
</form>

<p>
<hr>
<p>

<h2> List of hospitals:</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/hospitals.php">Hospitals</a>

<p>
<hr>
<p>


<h2>Patients :</h2>
<form action="patients.php" method="post">
Enter the OHIP number of the patient : <input type="text" name="OHIP"><br>
<input type="submit" value="Get patient's informations">
</form>

<p>
<hr>
<p>

<h2> Doctors treating patients:</h2>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/assigndoctor.php">Assign a doctor to treat a patient</a> 
<p>
<a href="http://cs3319.gaul.csd.uwo.ca/vm123/a3yassin/stoptreat.php">Stop a doctor from treating a patient </a>

<p>
<hr>
<p>

<h2> Doctors with no patients:</h2>
<?php
   $query = 'select firstName, lastName  from doctor where doctor.docLicNum NOT IN (select docLicNum from treats)';
   $result=mysqli_query($connection,$query);
   if (!$result) {
     die("database query failed.");
   }
   while ($row=mysqli_fetch_assoc($result)) {
     echo $row["firstName"] . " " . $row["lastName"];
     echo "<br>";
   }

   mysqli_free_result($result);


?>


<?php
  mysqli_close($connection);
?>
</body></html>



