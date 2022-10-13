<?php require_once('../templates/header.php'); print_header('Exercise 02') ?>

<p>
  <?php
  if (isset($_GET['peseta']))
  {
    $result = number_format($_GET['peseta'] / 166.386, 2);
    echo "$_GET[peseta] pesetas son $result euros";
  }
  else
  {
    echo "Missing input";
  }
  ?>
</p>

<?php require_once('../templates/footer.html'); ?>
