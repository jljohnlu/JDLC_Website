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
$size = $_POST['size'];
echo $size;
?>

<?php
$shape = $_POST['shape'];
echo $shape;
?>


 </body>
</html>