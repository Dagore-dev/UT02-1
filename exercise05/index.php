<?php require_once('../templates/header.php'); print_header('Exercise 05') ?>

<form action="./exercise05/rectangleArea.php">
  <label for="width">Width</label>
  <input type="number" name="width" id="width">

  <label for="height">Height</label>
  <input type="number" name="height" id="height">

  <button>Send</button>
</form>

<?php require_once('../templates/footer.html'); ?>
