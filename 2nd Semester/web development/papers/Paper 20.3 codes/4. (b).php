HTML

<html>
<body>

<form action="4.(b)-PHP.php" method="POST" enctype="multipart/form-data">
<input type="file" name="4-b-question">
<input type="submit">
</form>

</body>
</html>

PHP

 <?php
$filename = $_FILES['4-b-question']['name'];
$filesize =$_FILES['4-b-question']['size'];
$filetmpname =$_FILES['4-b-question']['tmp_name'];
$filetype=$_FILES['4-b-question']['type'];
  
      
echo "name = $filename <br>";
echo "size = $filesize <br>";
echo "tmp loc = $filetmpname  <br>";
echo "type = $filetype <br>";
?>