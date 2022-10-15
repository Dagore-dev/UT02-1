<?php require_once('../templates/header.php'); print_header('Exercise 08') ?>

<?php
$hour_payment = $_GET['hour-payment'];
$hours_worked = $_GET['hours-worked'];

if (isset($hour_payment, $hours_worked))
{
  $weeklySalary = $hour_payment * $hours_worked;
  echo "<p>The weekly salary for $hours_worked hour paid at $hour_payment euros an hour is equal to $weeklySalary euros</p>";
}
else
{
  echo '<p>Missing arguments</p>';
}
?>

<?php require_once('../templates/footer.html'); ?>
