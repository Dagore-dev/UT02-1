<?php require_once('../templates/header.php'); print_header('Exercise 10') ?>

<p>
  <?php
  if (isset($_GET['megabit']))
  {
    $result = $_GET['megabit'] * 1000;
    echo "$_GET[megabit] megabits son $result kilobits";
  }
  else
  {
    echo "Missing input";
  }
  ?>
</p>

<?php require_once('../templates/footer.html'); ?>
