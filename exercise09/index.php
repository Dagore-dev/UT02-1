<?php require_once('../templates/header.php'); print_header('Exercise 09') ?>

<form action="./exercise09/coneVolume.php">
  <label for="radius">Radius</label>
  <input type="number" name="radius" id="radius">

  <label for="height">Height</label>
  <input type="number" name="height" id="height">

  <button>Send</button>
</form>

<?php require_once('../templates/footer.html'); ?>
