<html>
<head>
<meta charset="utf-8">
<title>INSERT</title>
<link href="demo.css" rel="stylesheet" type="text/css">
</head>
<?php
$dbhost = "localhost";
$dbuser = "anurag";
$dbpassword = "root";
$dbname = "test";
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if (mysqli_connect_errno()){
die("Database connection failed".mysqli_connect_error()."(".mysqli_connect_errno().")");}
else{
echo "connection successful";}	


?>
<br/>
<body>
<div id="wrapper">
    <header id="header">
        <h1>Insert Record</h1>
	</header>
</div>
<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$date = $_POST['date'];
$state = $_POST['state'];


?>
<?php
$query = "INSERT INTO student(";
$query .= "Name,Roll_No,DOB,STATE";
$query .= ") VALUES (";
$query .= "'$name','$roll','$date','$state'";
$query .=")";
$result = mysqli_query($connection,$query);
if($result){
?>
<script type="text/javascript">
window.location.href = "insertsuccess.php";
</script>
<?php
}
else
{
	die("Query failed");
}

?>
