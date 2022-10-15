<?php require_once('../templates/header.php'); print_header('Exercise 07') ?>

<?php
$subtotal = $_GET['subtotal'];
$base = $_GET['base'];

if (isset($subtotal, $base))
{
  $total = $subtotal * (1 + ($base / 100));

  echo "<p>With a base of $base% the total goes up from $subtotal to $total</p>";
}
else
{
  echo '<p>Missing arguments</p>';
}
?>

<?php require_once('../templates/footer.html'); ?>
