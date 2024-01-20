HTML Form
<html>
<head>
<title>3. (b)</title>
</head>

<body>
<form method = POST name = "RegistrationForm" action = "emp.php">

Employee No: <input type = "text" name = "empno"/><br><br>
Name: <input type = "text" name = "empname"/><br><br>
Phone Number: <input type = "text" name = "emptp"/><br><br>

<input type = "submit" name = "sub" value = "Submit"/>
</form>

</body>
</html>




PHP Page
<html>
<head>
<title>3. (b)</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Company";


$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
die("Connection Failed: ".$connection->connect_error);
}

$sql = "UPDATE EMP
SET Phno = ".$_POST["phoneNo"]."
WHERE Eno=".$_POST["eno"]."";

if($conn->query($sql) === TRUE){
echo "<h2>All The data you have entered has been Uploaded Successfully !!!</h2>";
}
else{
echo "<h2>Data you entered is unable to update !!</h2>".$connection->error;
}

$connection->close();
?>
</body>
</html>