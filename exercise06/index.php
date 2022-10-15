<?php require_once('../templates/header.php'); print_header('Exercise 06') ?>

<form action="./exercise06/triangleArea.php">
  <label for="width">Base</label>
  <input type="number" name="base" id="base">

  <label for="height">Height</label>
  <input type="number" name="height" id="height">

  <button>Send</button>
</form>

<?php require_once('../templates/footer.html'); ?>
