<?php include "./controller/calculationController.php"; ?>

<form method="post">
  <h2>Edad</h2>
  <div class="form__row">
    <div>
       <label for="birth-date">Ingrese su fecha de nacimiento</label>
       <input id="birth-date" type="date" name="birth_date">
    </div>
  </div>
  <button>ENVIAR</button>
</form>