<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">wanheda</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="">HOME</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="reservé.php">reservation</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="Lestock.php">le stock</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="suspended.php">accounts suspended</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="connect.php">Logout</a></li>   
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">wanheda</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
        </header>

        <section id="ajouter" class="ajouter">
            <div class="container">
                <div class="section-title">
                    <h2>Ajouter des ouvrages</h2>
                </div>
                <form action="" method="post">
                <div>
                  <input type="text" name="titre" placeholder="Titre">
                  <input type="text" name="nom_auteur" placeholder="Nom auteur">
                  <input type="file" name="url_image" placeholder="">
                  <div class="form-group mx-sm-3 mb-3">
                <select  name="etat">
                    <option selected name="etat">Etat</option>
                    <option value="neuf" name="neuf">Neuf</option> 
                    <option value="Bon état" name="Bon état">Bon état</option>
                    <option value="Acceptable" name="Acceptable">Acceptable</option>
                    <option value="neuf" name="neuf"></option>
                    <option value="occasion" name="occasion">Occasion</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-3">
                <select name="type">
                    <option selected>Type</option>
                    <option value="Livre" name="livre">livre</option>
                    <option value="Roman" name="roman">Roman</option>
                    <option value="DVD" name="dvd">DVD</option>
                    <option value="mémoire de recherche" name="memoire">Mémoire de recherche</option>
                </select>
            </div>
                  <input type="date"name="date_edition" placeholder="">
                  <input type="date" name="date_achat" placeholder="">
                  <input type="number"name="nombre_page" placeholder="Number_pages">
                  <button  name="submit" class="form-control btn btn-success submit px-3">Add ouvrage</button>
                </div>
                </form>
            </div>
        </section><!-- End ajouter Section -->

    <?php
    
    require "db.php";
    error_reporting(E_ERROR | E_PARSE);
    if(isset($_POST['submit'])){
        $title = $_POST['titre'];
        $nom_auteur = $_POST['nom_auteur'];
        $type = $_POST['type'];
        $date_achat = $_POST['date_achat'];
        $etat = $_POST['etat'];
        $nombre_page = $_POST['nombre_page'];
        $date_edition = $_POST['date_edition'];
        $url_image = $_POST['url_image'];

        // mysql pour insérer des données
        $query = "INSERT INTO Ouvrage(titre,nom_auteur,type,date_achat,etat,nombre_page,date_dédition,url_image)
        VALUES('$title', '$nom_auteur' , '$type'  , '$date_achat', '$etat','$nombre_page' , '$date_edition'  ,'$url_image')";
        // vérifier 

        if($result = mysqli_query($con,$query))
        {
            header("Location: index.php");
        }

        else{
            echo 'Données non insérées';
        }
        mysqli_close($con);

   }



?>


    </body>
</html>