<?php require_once('../templates/header.php'); print_header('Exercise 01') ?>

<p>
  <?php
  if (isset($_GET['num1'], $_GET['num2']))
  {
    $result = $_GET['num1'] * $_GET['num2'];
    echo "$_GET[num1] * $_GET[num2] = $result";
  }
  else
  {
    echo 'Missing numbers.';
  }
  ?>
</p>

<?php require_once('../templates/footer.html'); ?>
