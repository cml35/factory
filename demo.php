<?php

require('DrinkInterface.php');
require('DrinkFactoryInterface.php');
require('DrinkFactory.php');

$drink = false;
$recipe = false;
$temperature = false;

if (
  !empty($_REQUEST['drink'])
  && !empty($_REQUEST['temperature'])
) {
  $drink = DrinkFactory::create($_REQUEST['drink'], $_REQUEST['temperature']);
}

?>
<h2>Order here:</h2>
<form>
  <label>Drink Name</label>&nbsp;<input type="text" id="drink" name="drink" />
  <br>
  <br>
  <label>Hot/Warm/Cold</label>&nbsp;<input type="text" id="temperature" name="temperature" />
  <br>
  <br>
  <input type="submit" value="Place order" />
</form>

<h2>Order Completed:</h2>
<?php if ($drink): ?>
<h3><?= $drink->getName() ?></h3>
<p><?= $drink->getTemperature() ?></p>
<p><?= $drink->getDescription() ?></p>
<?php endif ?>

