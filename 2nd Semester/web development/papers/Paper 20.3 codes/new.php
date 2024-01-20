<html>
<head>
    <title>PHP-Receving Data</title>
</head>
<body>
    <?php
  $fname = $_REQUEST["firstname"];
  $lname = $_REQUEST["lastname"];
  $uname = $_REQUEST["username"];
  $passw = $_REQUEST["pw"];
  $gender = $_REQUEST["gender"];
  $ayear = $_REQUEST["academicyear"];
  $phno = $_REQUEST["telephone"];
  
  echo"<table border ='2'>
   <tr>
    <td><b>First Name</b></td>
    <td>$fname</td>
   </tr>
   <tr>
    <td><b>Last Name</b></td>
    <td>$lname</td>
   </tr>
   <tr>
    <td><b>Usernamee</b></td>
    <td>$uname</td>
   </tr>
   <tr>
    <td><b>Password</b></td>
    <td>$passw</td>
   </tr>
   <tr>
    <td><b>Gender</b></td>
    <td>$gender</td>
   </tr>
   <tr>
    <td><b>Academic Year</b></td>
    <td>$ayear</td>
   </tr>
   <tr>
    <td><b>Phone No</b></td>
    <td>$phno</td>
   </tr>
  </table>";
    ?>
</body>
</html>