<html>
    <head>
        <title>Aesthetic Physique</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
   <body>       
        <div class="hero">
                <div>
                    <img src="css/img/ap.png" class="logo">
                </div>
           <div class="form-box">


               <form action="validation.php" method="post" id="login" class="input-group">
                   <input type="text" name="name" class="input-field" placeholder="User Id" required>
                   <input type="password" name="password" class="input-field" placeholder="Password" required>
                   <button type="submit" name="submit" class="submitbtn">Login</button>
                    <br><br>
                    <?php
           
           if (isset($_GET["error"])) {
               if ($_GET["error"] == "wronglogin") {
                   echo "<p>Incorrect login information!</p>";
               }
               else if ($_GET["error"] == "none") {
                echo "<p>You have signed up succesfully!</p>";
            }
           }
           ?> 
               
               
               
               
               
                </form>
                <div class="abtn">
                <a href = "login.php" class="button">Log In</a>
                <a href = "signup.php" class="button">Register</a>
                </div>
            </div>
       </div>
  
  
  
  
    </body>
</html>