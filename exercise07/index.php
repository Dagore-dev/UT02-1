<?php require_once('../templates/header.php'); print_header('Exercise 07') ?>

<form action="./exercise07/applyTaxes.php">
  <label for="subtotal">Subtotal</label>
  <input type="number" name="subtotal" id="subtotal">
  
  <label for="base">Tax base (%)</label>
  <input type="number" name="base" id="base">

  <button>Send</button>
</form>

<?php require_once('../templates/footer.html'); ?>
