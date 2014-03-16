<?php
$body = $_POST["body"];
$size = $_POST["size"];
$shape = $_POST["shape"];

echo $body;
<br>
echo $size;
<br>
echo $shape;
echo "error";

?>

<?php
$body = $_GET["body"];
echo "GET".$body;
?>

<?php
$body = $_POST["body"];
echo "POST".$body;
?>
