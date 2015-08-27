<html>
<head>testing</head>
<body>
</br>
<?php
/*echo "hi there!!";
echo "</br>";
$x =25;
echo $x;

//echo $y;
*/?>

<?php
$dbhost = "localhost";
$dbuser = "anurag";
$dbpassword = "root";
$dbname = "test";
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if (mysqli_connect_errno()){
die("Database connection failed".mysqli_connect_error()."(".mysqli_connect_errno().")");}
else{
echo "connection successfull";}	

$query = "SELECT * FROM student";
$result = mysqli_query($connection,$query);
?>
<ul>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
<li><?php echo "Name" . "   ".$row["Name"]; ?></li>
<li><?php echo "Roll no." . "   ".$row["Roll_No"]; ?></li>
<li><?php echo "Dte of Birth" . "   ".$row["DOB"]; ?></li>
<li><?php echo "State" . "   ".$row["STATE"]; ?></li>
<?php echo "<hr/>"; } ?>
<?php
mysqli_free_result($result);
?>
</body>
</html>
<?php
mysqli_close($connection);


?>