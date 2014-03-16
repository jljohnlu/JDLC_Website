<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

<?php
$body = $_POST['body'];
echo $body;
?>

<?php
$size = $_POST['size'];
echo $size;
?>

<?php
$shape = $_POST['shape'];
echo $shape;
?>

<a href= "<?php echo $body.$size.$shape.'txt'?>" download>Download</a>



 </body>
</html>