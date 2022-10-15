<?php require_once('../templates/header.php'); print_header('Exercise 11') ?>

<p>
  <?php
  if (isset($_GET['kilobit']))
  {
    $result = $_GET['kilobit'] / 1000;
    echo "$_GET[kilobit] megabits son $result megabits";
  }
  else
  {
    echo "Missing input";
  }
  ?>
</p>

<?php require_once('../templates/footer.html'); ?>
