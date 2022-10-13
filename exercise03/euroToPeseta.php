<?php require_once('../templates/header.php'); print_header('Exercise 03') ?>

<p>
  <?php
  if (isset($_GET['euro']))
  {
    $result = number_format($_GET['euro'] * 166.386, 2);
    echo "$_GET[euro] euros son $result pesetas";
  }
  else
  {
    echo "Missing input";
  }
  ?>
</p>

<?php require_once('../templates/footer.html'); ?>
