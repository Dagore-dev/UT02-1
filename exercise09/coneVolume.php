<?php require_once('../templates/header.php'); print_header('Exercise 09'); ?>

<?php
$radius = $_GET['radius'];
$height = $_GET['height'];

if (isset($radius, $height))
{
  $area = number_format(M_PI * ($radius ** 2) * ($height / 3), 2);
  echo "<p>The volume of a cone with a radius of $radius units and a height of $height units is equal to $area units^3</p>";
}
else 
{
  echo "<p>Missing arguments</p>";
}
?>

<?php require_once('../templates/footer.html'); ?>
