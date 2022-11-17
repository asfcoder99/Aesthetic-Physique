<?php
    session_start();
?>

<html>
    <head>
        <title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/splits.css">
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
                <h1>Workout Splits</h1>
                <p>To achieve the physique you want, your body requires a specific volume of training in a particular week.<br>
                A workout split determines how hard you will be training in the gym on the days you choose to excercise.<br>
                So go ahead, choose from our different workout splits, purchase it and you are all good to go.   </p>
           
                
                <div>
                    <a href="workouts.php" class="button">Workouts</a>
                </div>           
         </div>

        </div>
    </body>
</html>