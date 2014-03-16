<?php 
 error_reporting(E_ALL); 
?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

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