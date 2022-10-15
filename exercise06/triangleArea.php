<?php require_once('../templates/header.php'); print_header('Exercise 06'); ?>

<?php
$base = $_GET['base'];
$height = $_GET['height'];

if (isset($base, $height))
{
  $area = ($base * $height) / 2;
  echo "<p>The area of a triangle with a base of $base units and a height of $height units is equal to $area units^2</p>";
}
else 
{
  echo "<p>Missing arguments</p>";
}
?>

<?php require_once('../templates/footer.html'); ?>
