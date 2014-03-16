<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>


<a href= <?php echo $body.$size.$shape?>."txt" download>Download</a>

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

 </body>
</html>