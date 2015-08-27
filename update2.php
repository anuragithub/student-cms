<html>
<head></head>
<?php
$dbhost = "localhost";
$dbuser = "anurag";
$dbpassword = "root";
$dbname = "test";
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if (mysqli_connect_errno()){
die("Database connection failed".mysqli_connect_error()."(".mysqli_connect_errno().")");}
else{
echo "";}	
?>

<br/>
<body>

<?php
//print_r ($_POST);
$roll = $_POST['roll'];
//echo "$roll";
$checkq = "SELECT * FROM student WHERE Roll_No = '$roll'";
$check = mysqli_query($connection,$checkq);
if($check)
{
?>
<form action = "update3.php" method ="post" align ="center">
	Name : <input type = "text" name = "name" value = ""/><br/>
	Roll no. : <input type = "is_integer" name = "roll" value = ""/><br/>
	Date of Birth : <input type = "date" name = "date" value = ""/><br/>
	State : <input type = "text" name = "state" value = ""/><br/>
	Submit : <input type = "Submit" name = "submit" value = "Submit ."/>
</form>
<?php


}
else{
	die("failed");
}
?>