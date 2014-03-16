<?php 
 error_reporting(E_ALL); 
?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

<?php
$body = $_POST['body'];
echo "POST".$body;
?>

<?php
$body = $_POST['shape'];
echo "POST".$body;
?>

<?php
$body = $_POST['size'];
echo "POST".$body;
?>


 </body>
</html>