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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="gerant.php">HOME</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="connect.php">Logout</a></li>   
                    </ul>
                </div>
            </div>
        </nav>

        <header>
            <div style=" display: flex; justify-content: center ; margin-top: 15%;">
            <img src="imgs/vecteezy_opening-student-textbooks_10682255.jpg" alt="" style="width: 20%;">
            </div>
        </header>

        <?php
// Connexion à la base de données
$servername = "localhost";
$username = "Root";
$password = "";
$dbname = "bibliothèque";

$con = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Récupération des informations de la base de données
$sql = "SELECT * FROM Ouvrage";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Affichage des informations dans une carte modale en HTML
    while($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<div style="display:flex;">';
        echo '<div>';
        echo '<img src="photo/'. $row["url_image"].'" style="width:200px">';
        echo '</div>';
        echo '<div style="margin-left:15%;">';
        echo '<h5 class="card-title"><span style="font-weight:bold;">Titre :</span> ' . $row["titre"] . '</h5>';
        echo '<p class="card-text"><span style="font-weight:bold;">Nom auteur :</span> ' . $row["nom_auteur"] . '</p>';
        echo '<p class="card-text"><span style="font-weight:bold;">Type :</span> ' . $row["type"] . '</p>';
        echo '<p class="card-text"><span style="font-weight:bold;">Date achat :</span> ' . $row["date_achat"] . '</p>';
        echo '<p class="card-text"><span style="font-weight:bold;">Etat :</span> ' . $row["etat"] . '</p>';
        echo '<p class="card-text"><span style="font-weight:bold;">Nombre page :</span> ' . $row["nombre_page"] . '</p>';
        echo '<p class="card-text"><span style="font-weight:bold;">Date édition :</span> ' . $row["date_dédition"] . '</p>';    
        echo '</div>';   
        echo '</div>';
        echo '<form action="delete.php" method="Post">
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <input type="submit" class="btn btn-outline-success mt-auto" value="edit">
                            <input type="hidden" name="idDelet" value="'.$row['ID_ouvrage'].'">
                            <input type="submit" class="btn btn-outline-danger mt-auto" value="delete">
                        </div>
                    </div>
                </div>
                </form>';
        echo '</div>';
        echo '</div>';
        
        
        // Affichage de la carte modale
        echo '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog" role="document">';
        echo '<div class="modal-content">';
        echo '<div class="modal-header">';
        echo '<div class="modal-body">';
        echo '<img src="photo/'. $row["url_image"].'" style="width:200px">';
        echo '</div>';
        echo '<h5 class="modal-title">' . $row["titre"] . '</h5>';
        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<p>' . $row["nom_auteur"] . '</p>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<p>' . $row["type"] . '</p>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<p>' . $row["date_achat"] . '</p>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<p>' . $row["etat"] . '</p>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<p>' . $row["nombre_page"] . '</p>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<p>' . $row["date_dédition"] . '</p>';
        echo '</div>';
        echo '<div class="modal-footer">';
        echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 résultats";
}

// Fermeture de la connexion à la base de données
$con->close();





?>

    </body>
</html>