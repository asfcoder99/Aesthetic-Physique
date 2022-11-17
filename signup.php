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


                <form action="registration.php" method="post" id="register" class="input-group">
                    <input type="text" name="name" class="input-field" placeholder="User Id" required>
                    <input type="email" name="email" class="input-field" placeholder="Email ID" required>
                    <input type="number" name="age" class="input-field" placeholder="Age" required>
                    <input type="text" name="height" class="input-field" placeholder="Height in cm" required>
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <button type="submit" name="submit" class="submitbtn">Register</button>
                <br><br>
       <?php
           
           if (isset($_GET["error"])) {
               if ($_GET["error"] == "usernametaken") {
                   echo "<p>Username or Email ID Taken!</p>";
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