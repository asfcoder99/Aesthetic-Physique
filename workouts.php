<?php
    session_start();
?>

<html>
    <head>
        <title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/workouts.css">
        
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
                        <img src="css/img/3x.PNG">
                    </div>
                    <div class="cardcontent">
                        <h4>Workout Plan: 3 Days Per Week <br>Rs. 750</h4>
                        <p>Workout 3 days a week with a recommended rest period of atleast 1 day in between and complete your workout volume for the week in just 3 workout sessions.
                                <p>
                    </div>
                        <div class="button">
                            <a href="thanks.php">Buy Now</a>
                        </div>
                </div>

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/4x.JPG">
                    </div>
                    <div class="cardcontent">
                        <h4>Workout Plan: 4 Days Per Week <br>Rs. 750</h4>
                        <p>Workout 4 days a week with a recommended rest period of atleast 1 day in between 2 continuous workout sessions and complete your workout volume for the week in just 4 workout sessions.
                                <p>
                    </div>
                        <div class="button">
                            <a href="thanks.php">Buy Now</a>
                        </div>
                </div>

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/5x.JPG">
                    </div>
                    <div class="cardcontent">
                        <h4>Workout Plan: 5 Days Per Week <br>Rs. 750</h4>
                        <p>Workout 5 days a week with a recommended rest period of atleast 2 days in a week and complete your workout volume for the week in 5 workout sessions.
                        </p>
                    </div>
                    <div class="button">
                        <a href="thanks.php">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/6x.JPG">
                    </div>
                    <div class="cardcontent">

                        <h4>Workout Plan: 6 Days Per Week <br>Rs. 750</h4>
                        <p>Workout 6 days a week with a recommended rest period of atleast 1 day in a week and complete your workout volume for the week in 6 workout sessions.</p>
                    </div>
                    
                    <div class="button">
                        <a href ="thanks.php">Buy Now</a>
                    </div>>
                    

                </div>


            </div>
        
        </div>
    </body>
</html>