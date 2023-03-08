<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require 'db.php';
session_start();
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $mtp = $_POST["mtp"];
  $result = mysqli_query($con, "SELECT * FROM Gerant WHERE username = '$username' AND mtp ='$mtp'");
  $row = mysqli_fetch_assoc($result);



  if(mysqli_num_rows($result) > 0){
    if($mtp == $row['mtp']  && $username == $row['username']) {
      $_SESSION["login"] = true;
      $_SESSION["ID_gerant"] = $row["ID_gerant"];
      header("Location: gerant.php");
    }

    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

?>




    <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">Sign in</h3>
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Username" />  
                    </div>
        
                    <div class="form-outline mb-4">
                        <input type="password" name="mtp" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" />
                    </div>
        
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
                </form>

                

                </div>
            </div>
        </div>
        </div>
    </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>