<?php
    session_start();
?>

<html>
    <head>
        <title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/recipe.css">
        
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
                        <img src="css/img/dish1.jpg">
                    </div>
                    <div class="cardcontent">
                        <h4>Roasted MCT Spiced Sweet Potatoes</h4>
                        <p>Ingredients<br>8 sweet potatoes, peeled and cut into cubes <br>¼ cup MCT Oil <br>¼ cup maple syrup <br>2 tsp cinnamon 
                        <br>1 tsp ground black pepper <br>½ tsp ground ginger <br>¼ tsp ground cloves <br>¼ tsp nutmeg <br>
                    <br>Directions<br>
                    1.Preheat the oven to 400 degrees F. <br>2.Toss the sweet potatoes with all the ingredients.
                    <br>3.Place the potatoes on a sheet pan in a single layer. <br>4.Roast for 30 minutes or until the sweet potatoes are golden brown and tender in the center.
                    <br><br> Total Calories: 180 </p>
                    </div>
                    <div class="cardbutton"></div>
                </div>

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/dish3.jpg">
                    </div>
                    <div class="cardcontent">
                        <h4>Egg and Bacon Breakfast Sandwich</h4>
                        <p>Ingredients
                            <br>2 slice regular whole-grain bread
                            <br>1 whole egg
                            <br>1 slice, medium tomatoes
                            <br>2 slice (1 oz) colby cheese
                            <br>½ fruit, without skin and seed avocado
                            <br>1 cup spinach<br>
                            <br>Directions
                            <br>1.Cook the eggs however desired scrambled, fried, poached, etc.
                            <br>2.Toast the whole-wheat bread until golden brown and place eggs on one slice of toast.
                            <br>3.Lay both slices of cheese on top of the eggs, followed by the spinach, tomato, and avocado.
                            <br>4.Top the sandwich with the second piece of toast. Serve hot.<br>
                            <br>Total Calories: 550</p>
                    </div>
                    <div class="cardbutton"></div>
                </div>

                <div class="card">
                    <div class="cardimage">
                        <img src="css/img/dish2.jpg">
                    </div>
                    <div class="cardcontent">
                        <h4>Protein Drizzled Apples</h4>
                        <p>Ingredients<br>1 apple <br>¼ cup MCT Oil <br>½ scoop Whey Protein Powder <br>1 tsp lemon juice 
                        <br>1 dash cinnamon 
                    <br>Directions<br>
                    1.Cut the apple into cubes or slices and place in a bowl. <br>2.Combine the protein powder, lemon juice, and cinnamon and drizzle over the apples.
                    <br><br> Total Calories: 170 </p>
                    </div>
                    <div class="cardbutton"></div>
                </div>

                
                


            </div>
        
        </div>

        <div class="homebtn">
            <a href="AP.php" class="button">Home</a>
        </div> 

    </body>
</html>