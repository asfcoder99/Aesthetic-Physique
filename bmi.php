<?php
    session_start();
?>

<html>
	<head>
		<title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/bmi.css">
	</head>

	<script type="text/javascript">
		function BMI() {
			var h=document.getElementById('h').value;
			var w=document.getElementById('w').value;
			var bmi=w/(h/100*h/100);
			var bmio=(bmi.toFixed(2));

			document.getElementById("result").innerHTML="Your BMI is " + bmio;
		}
	</script>
	<body>

		<div>
			<h2>BMI Calculator</h2>
			<p class="text">Height</p>
			<input type="text" id="h">
			<p class="text">Weight</p>
			<input type="text" id="w">
			<p id="result"></p>
			<button id="btn" onClick="BMI()">Calculate</button>
			<p id="info">Please enter height [cm] and weight [kg]</p>
		
            
                <a href="calculators.php" class="button">Go Back</a>
              
	</div>
    </body>
</html>