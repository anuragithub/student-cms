<html>
<head>
<meta charset="utf-8">
<title>SRM</title>
<link href="demo.css" rel="stylesheet" type="text/css">
</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>
<div id="wrapper">
    <header id="header">
        <h1>StudentRecord</h1>
	</header>
</div>	
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
echo "";}	

$query = "SELECT * FROM student";
$result = mysqli_query($connection,$query);
?>

<br/>
<table align = "left">
   <tr>
    <th>Name</th>
    <th>Roll no.</th> 
    <th>Date of birth</th>
	<th>State</th>
  </tr>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
  <tr>
	<td><?php echo $row["Name"]; ?></td>
	<td><?php echo $row["Roll_No"]; ?></td> 
	<td><?php echo $row["DOB"]; ?></td>
	<td><?php echo $row["STATE"]; ?></td>
  </tr>
<?php 
} ?>
</table>
<?php
mysqli_free_result($result);
?>
</body>
</html>
<?php
mysqli_close($connection);


?>