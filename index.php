<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BMI Calculator</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<form action="" method="post">
  	<fieldset>
     <legend>BMI Calculator</legend>
     	<label for="weight">Weight (kg)</label>
     	<input type="number" id="weight" name="weight" placeholder="Enter your weight" required>

     	<label for="height">Height (cm)</label>
     	<input type="number" id="height" name="height" placeholder="Enter your height" required>

      <button type="submit">Calculate</button>
  	</fieldset>
	</form>

	<div class="result">
	  <h4>Result</h4>
   	<?php
    $weight = trim($_POST["weight"] ?? 0);
    $height = trim($_POST["height"] ?? 0);
    ?>
  	<p><?php if (isset($_POST["weight"]) && $weight !== "" && isset($_POST["height"]) && $height !== "") {
     if ($weight <= 0 || $height <= 0) {
       echo "Please! Enter valid value.";
     } else {
       echo "Weight: <strong>$weight</strong> KG";
       echo "<br><br>";
       echo "Height: <strong>$height</strong> CM";
       echo "<br><br>";

       $bmi = number_format($weight / ($height / 100) ** 2, 2);
       if ($bmi < 18.5) {
         echo "BMI: <strong>$bmi</strong> (Underweight)";
       } elseif ($bmi < 25) {
         echo "BMI: <strong>$bmi</strong> (Normal)";
       } elseif ($bmi < 30) {
         echo "BMI: <strong>$bmi</strong> (Overweight)";
       } else {
         echo "BMI: <strong>$bmi</strong> (Obese)";
       }
     }
   } ?></p>
	</div>
</body>
</html>
