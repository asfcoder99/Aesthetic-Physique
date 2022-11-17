<?php
    session_start();
?>

<html>
	<head>
		<title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/bmr.css">
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
    find("totalCals").innerHTML = Math.round( result )
}
calsPerDay()
	</script>




<body>
  <div>

  <h1>BMR Calculator</h1>
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

  
  <p id="totalCals"></p>
			<button id="btn" onClick="calsPerDay()">Calculate</button>
<br><br>
  <a href="calculators.php" class="button">Go Back</a>


</div>


</body>
</html>