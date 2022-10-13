<?php require_once('../templates/header.php'); print_header('Exercise 02') ?>

<form action="./exercise02/pesetaToEuro.php">
  <label for="peseta">Pesetas</label>
  <input type="number" name="peseta" id="peseta">

  <button>To euros</button>
</form>

<?php require_once('../templates/footer.html'); ?>
