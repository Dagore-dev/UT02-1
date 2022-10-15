<?php require_once('../templates/header.php'); print_header('Exercise 05'); ?>

<?php
$width = $_GET['width'];
$height = $_GET['height'];

if (isset($width, $height))
{
  $area = $width * $height;
  echo "<p>The area of a rectangle with a width of $width units and a height of $height units is equal to $area units^2</p>";
}
?>

<?php require_once('../templates/footer.html'); ?>
