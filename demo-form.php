<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
body

{
	background-image: url("https://app.globalradar.com/Images/login-background.jpg");
}
</style>


</head>
 <body>

 	<header></header>

<link rel="stylesheet" type="text/css" href="style.css"/>

<h1><center>
	La Roche College<br>
	Departement of Chemistry<br>
	Course Assessment form<br>
</center>

	

</h1>


<?php
include('demo.php');
?>

</style>
<form action="demo.php" method="post"/ >



<p> course number: <input type= "text" name="coursenumber" /> </p>

	 <p>course name:  <select name="coursename" onchange="this.form.submit()"></p>
	 	<option value="select a course name"> select a course</option>

 <?php 

 if(mysqli_num_rows($result)>0){

 	while($row=mysql_fetch_array($result))
 	{
 		$ID= $row["coursename"];
 		echo" <option value=";
 		echo "$ID>$ID</option> ";
 	}
 }
 else
 {
 	echo "no result";
 }
 
 ?>
 </select>
 <br>

	</form> 

	
</body>
</html>

<? php




if (isset($_POST["coursename"])) {
	# code...

include('demo.php');


$select="SELECT * coursenumber, coursename, instructorname, semester FROM demo ";

$result= mysqli_query($conn,$select);// or die("error: $select") ;

$coursename=$_POST["coursename"];
$id='coursenumber';

while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC())) 
	{
	# code...
	echo "<h4> course:<input type='text' id='course' value={$row['coursenumber']}> <br> ";
	echo "<h4> course name: <input type='text' id='coursename' value={$row['coursename']}> <br> ";
	echo "<h4> instructor name: <input type='text' id='instructorname' value={$row['instructorname']}> <br>";
	echo "<h4> semester: <input type='text' id='semester' value={$row['semester']}> <br> ";
	}
}
?>

