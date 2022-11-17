<?php
    session_start();
?>

<html>
    <head>
        <title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/thanks.css">
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
                <h1>Your Payment was successful.</h1>
                <p>Thank you for making this purchase, we wish you luck on youtr fitness journey. <br>An email will be sent to you with the workout plan attached. </p>
           
                <div>
                    <a href="AP.php" class="button">Home</a>
                    <a href="workouts.php" class="button">Back</a>
                </div>           
            </div>

        </div>
    </body>
</html>