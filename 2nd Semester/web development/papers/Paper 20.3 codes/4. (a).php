<html>
<head>
<title>4.(a)</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

$Month = $_POST["month"];
$Day = $_POST["day"];
$Year = $_POST["year"];

$date = '$Day/$Month/$Year';


$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
die("Connection Failed: ".$connection->connect_error);
}

$sql = "INSERT INTO 
info(FirstName, Lastname, Email, Date, Password)
VALUES
('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."',$date,'".$_POST["password"]."')";

if($connection->query($sql) === TRUE){
echo "<h3 style = 'color: green; text-align:center;'>Your data has been sent successfully !</h2>";
}
else{
echo "<h3 style = 'color: red; text-align:center;'>Error: Your data is cannot be sent !</h2>".$connection->error;
}

$connection->close();
?>
</body>

</html>