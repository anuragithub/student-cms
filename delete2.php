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
$checkq = "DELETE FROM student WHERE Roll_No = '$roll'";
$check = mysqli_query($connection,$checkq);
if($check)
{
?>
<script type="text/javascript">
window.location.href = "delete3.php";
</script>
<?php


}
else{
	die("failed");
}
?>