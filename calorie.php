<?php
    session_start();
?>


<html>
	<head>
		<title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/calorie.css">
	</head>

	<script type="text/javascript">
function calsPerDay() {
  function find(id) { return document.getElementById(id) }

  var age = find("height").value
  var height = find("height").value / 2.54
  var weight = find("weight").value * 2.2
  var result = 0
  if (find("male").checked) 
    result = 88.362 + (13.397 * weight) + (4.799 * height - (5.677 * age))
  else if (find("female").checked)
    result = 447.593 + (9.247 * weight) + (3.098 * height - (4.330 * age))



    if (find("sedentary").checked) 
    tdee = result * 1.4
    else if (find("modactive").checked)
    tdee = result * 1.6
    else if (find("veryactive").checked)
    tdee = result * 1.8

   
    find("totalCals").innerHTML = Math.round( tdee )
    find("totalCalsg").innerHTML = Math.round( tdee + 500)
    find("totalCalsl").innerHTML = Math.round( tdee - 500)
}
calsPerDay()
	</script>




<body>
  <div>

  <h1>Calorie Intake Calculator</h1>
  <label>
      Female:
    <input id="female" type="radio" name="gender">
  <br><br>
  Male:
    <input id="male" type="radio" name="gender">
  </label>
  <label>Age:
    <input id="height" type="number">
  </label>
  <label>Height
    <input id="height" type="number">
    in cm:
  </label>
  <label>Weight
    <input id="weight" type="number">
    in kg:
  </label>


  <label>
    Sedentary:
    <input id="sedentary" type="radio" name="tdee1">
  <br><br>
    Moderately Active:
    <input id="modactive" type="radio" name="tdee1">
  <br><br>
    Very Active:
    <input id="veryactive" type="radio" name="tdee1">
  </label>
  
  To maintain weight eat your daily caloric consumption should be<p id="totalCals"></p>
  
  To gain weight eat your daily caloric consumption should be<p id="totalCalsg"></p>
  
  To lose weight eat your daily caloric consumption should be<p id="totalCalsl"></p>
			<button id="btn" onClick="calsPerDay()">Calculate</button>

  <a href="calculators.php" class="button">Go Back</a>


</div>


</body>
</html>