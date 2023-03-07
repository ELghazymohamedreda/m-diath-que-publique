<?php
require 'db.php';

if(isset($_POST["submit"])){
  $nom = $_POST["nom"];
  $prénom = $_POST["prénom"];
  $telephone =$_POST["telephone"];
  $adresse_email = $_POST["adresse_email"];
  $CNI = $_POST["CNI"];
  $username = $_POST["username"];
  $mtp = $_POST["mtp"];
  
    $query = "INSERT INTO Adherent (nom, prénom, telephone, adresse_email, CNI, username, mtp, date_inscription, pénalité) VALUES('$nom','$prénom','$telephone' , '$adresse_email' , '$CNI', '$username', '$mtp', NOW() , 0)";
    if(mysqli_query($con, $query)){
        header("location:login.php");
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="asia/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="asia/css/style.css">
</head>
<body>
<div class="main">
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="nom" id="nom" placeholder="Nom"/>
                    </div>
                    <div class="form-group">
                        <label for="prénom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="prénom" id="prénom" placeholder="Prénom"/>
                    </div>
                    <div class="form-group">
                        <label for="Telephone"><img src="asia/images/phone-fill.svg" alt=""></i></label>
                        <input type="tel" name="telephone" id="telephone" placeholder="Telephone"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="adresse_email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="C.N.I"><img src="asia/images/bank.svg" alt=""></i></label>
                        <input type="text" name="CNI" id="C.N.I" placeholder="C.N.I"/>
                    </div>
                    <div class="form-group">
                        <label for="Username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="username" id="Username" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="mtp"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="mtp" id="mtp" placeholder="Password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="asia/images/signup-image.jpg" alt="sing up image"></figure>
                <a href="Login.php" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</div>
</section>
    <!-- JS -->
    <script src="asia/vendor/jquery/jquery.min.js"></script>
    <script src="asia/js/main.js"></script>
</body>
</html>