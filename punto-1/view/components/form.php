<?php include "./controller/calculationController.php"; ?>

<form method="post">
  <h2>Calculadora</h2>
  <div class="form__row">
    <div>
       <label for="first-number">Primer numero</label>
       <input id="first-number" type="text" name="first_number" placeholder="500">
    </div>
    <div>
       <label for="second-number">Segundo numero</label>
       <input id="second-number" type="text" name="second_number" placeholder="800">
    </div>
    <div>
       <label for="operation-type">Tipo de operación</label>
       <input id="operation-type" type="text" name="operation_type" placeholder="1">
    </div>
  </div>
  <button>Calcular</button>
</form>