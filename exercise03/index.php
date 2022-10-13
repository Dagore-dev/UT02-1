<?php require_once('../templates/header.php'); print_header('Exercise 03') ?>

<form action="./exercise03/euroToPeseta.php">
  <label for="euro">Euros</label>
  <input type="number" name="euro" id="euro">

  <button>To pesetas</button>
</form>

<?php require_once('../templates/footer.html'); ?>
