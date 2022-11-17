<?php
    session_start();
?>


<html>
    <head>
        <title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/calculator.css">
        
    </head>
    <body>

        <div  class="banner">
            <div class="navbar">
                <img src="css/img/ap.png" class="logo">
                <ul>
                    <li><a href="AP.php">Home</a></li>
                    <li><a href="Splits.php">Workout Splits</a></li>
                    <li><a href="calculators.php">Macro Calculators</a></li>
                    <li><a href="Recipes.php">Recipes</a></li>
                    
                    <?php
                    if (isset($_SESSION["website"])) {

                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                    else {
                        echo "<li><a href='login.php'>Log In</a></li>";
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                    }

                ?>



                </ul>
            </div>

        <div id="wrapper">
            <div class="cardgroup">

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/bmi.jpg">
                    </div>
                    <div class="cardcontent">
                        <h4>Body Mass Index</h4>
                        <p>Body mass index is a value derived from the mass and height of a person. 
                            <br>The BMI is defined as the body mass divided by the square of the body height, and is expressed in units of kg/m², resulting from mass in kilograms and height in metres.
                                <p>
                    </div>
                        <div class="button">
                            <a href="bmi.php">Calculate</a>
                        </div>
                </div>

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/bmr.jpg">
                    </div>
                    <div class="cardcontent">
                        <h4>Basal Metabolic Rate</h4>
                        <p>BMR is the number of calories your body uses to maintain vital functions, such as breathing, heart rate, and brain function.
                        </p>
                    </div>
                    <div class="button">
                        <a href="bmr.php">Calculate</a>
                    </div>
                </div>

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/caloriecalculator.jpg">
                    </div>
                    <div class="cardcontent">

                        <h4>Calorie Intake Calculator</h4>
                        <p>The results show a number of daily calorie estimates that can be used as a guideline for how many calories to consume each day to maintain, lose, or gain weight at a chosen rate.</p>
                    </div>
                    
                    <div class="button">
                        <a href ="calorie.php">Calculate</a>
                    </div>>
                    

                </div>


            </div>
        
        </div>
    </body>
</html>