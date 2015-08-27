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
<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$date = $_POST['date'];
$state = $_POST['state'];

?>
<?php
$roll = $_POST['roll'];
$query = "UPDATE student SET Name = '$name', DOB = '$date', STATE ='$state'";
$query .="WHERE Roll_No = '$roll'";
$result = mysqli_query($connection,$query);
if($result){
?>
<html>
<head>ENRTRY UPDATED SUCCESFULLY..!!</head>
<body>
<form action = "test2.php" method = "post">
	View : <input type ="submit" name ="view" value ="View database"/>
</form>
</body>
</html>
<?php
}
else
{
	die("Query failed");
}

?>

