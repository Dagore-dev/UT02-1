<?php require_once('../templates/header.php'); print_header('Exercise 01') ?>

<form action="./exercise01/multiply.php" method="get">
  <label for="num1">Number one:</label>
  <input type="number" name="num1" id="num1">
  
  <label for="num2">Number two:</label>
  <input type="number" name="num2" id="num2">

  <button>Send</button>
</form>

<?php require_once('../templates/footer.html'); ?>
