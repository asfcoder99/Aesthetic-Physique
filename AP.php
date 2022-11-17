<?php
    session_start();
?>

<html>
    <head>
        <title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/AP.css">
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

            <div class="content">
                <h1>Achieve Your Fitness Goals</h1>
                <p>Use our fitness calculators, select a workout plan and <br>browse through various of our healthy recipes. </p>
           
                <div>
                    <a href="calculators.php" class="button">START YOUR JOURNEY</a>
                </div>           
            </div>

        </div>
    </body>
</html>