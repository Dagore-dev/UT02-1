<?php require_once('../templates/header.php'); print_header('Exercise 04') ?>

<p>
  <?php
  if (isset($_GET['num1'], $_GET['num2']))
  {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "<p>$num1 and $num2</p>";
    
    $operations = ['sum' => $num1 + $num2, 'subtract' => $num1 - $num2, 'multiply' => $num1 * $num2, 'divide' => $num1 / $num2];
    
    foreach ($operations as $key => $value) 
    {
      echo "<p>$key => $value</p>";
    }
  }
  else
  {
    echo 'Missing numbers.';
  }
  ?>
</p>

<?php require_once('../templates/footer.html'); ?>
