<?php require_once('../templates/header.php'); print_header('Exercise 08') ?>

<form action="./exercise08/weeklySalary.php">
  <label for="hour-payment">Payment for hour (euros)</label>
  <input type="number" name="hour-payment" id="hour-payment" step="any">

  <label for="hours-worked">Hours worked in a week</label>
  <input type="number" name="hours-worked" id="hours-worked">

  <button>Send</button>
</form>

<?php require_once('../templates/footer.html'); ?>
