<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

 TEST

<?php
$body = $_POST["body"];
$size = $_POST["size"];
$shape = $_POST["shape"];

echo $body;
<<<<<<< HEAD
<br>
echo $size;
<br>
echo $shape;
echo "error";

?>

<?php
$body = $_GET['body'];
echo "GET".$body;
?>

<?php
$body = $_POST['body'];
echo "POST".$body;
?>

 </body>
</html>


=======
?>
>>>>>>> parent of 29f4519... test
