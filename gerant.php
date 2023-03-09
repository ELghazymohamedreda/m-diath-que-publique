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

        <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title" id="titreAnnonce">
          <h2>Desposer un Livre</h2>
        </div>
        <div class="row content" id="info">
          <div class="col-lg-6">
            <section class="u-align-center u-clearfix u-gradient u-section-3" id="carousel_babd">
              <div class="u-clearfix u-sheet u-sheet-1">
                <section class="h-100 h-custom" style="background-color: #fff;">
                  <div class="container py-5 h-100" id="agency">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="card-body p-4 p-md-5" id="titreInfo">
                        <div id="titleInfo">
                          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">ANNONCES INFO</h3>
                        </div>

                        <form class="px-md-2" action="index.php" method="post" enctype="multipart/form-data">
                          <!-- <input type="text" name="hidden_id" id="my_hidden_id" value=""/> -->
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example1q">Titre</label>
                            <input type="text" id="form1Example1q" class="form-control" name="titre" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1q">Import Image</label>
                            <input type="file" id="form3Example1q" class="form-control" name="image" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1q">Nom auteur</label>
                            <input type="text" id="form3Example1q" class="form-control" style="height: 20vh;" name="nom_auteur" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1q">Type</label>
                            <input type="text" id="form3Example1q" class="form-control" name="type" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1q">Etat</label>
                            <input type="text" id="form3Example1q" class="form-control" name="etat" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1q">Nombre page</label>
                            <input type="text" id="form4Example1q" class="form-control" name="nombre_page" />
                          </div>

                          <div class="row">
                            <div class="form-outline mb-4">
                              <div class="form-outline mb-4">
                                <label for="exampleDatepicker1" class="form-label">Date
                                  d’édition</label>
                                <input type="date" class="form-control" id="exampleDatepicker1" name="date_dédition" />
                              </div>
                            </div>
                          </div>

                          <!-- <div class="form-outline mb-4">
                            <label class="form-label" for="form5Example1q">Type annonce</label>
                            <select name="type_annonce" class="form-select" aria-label="Default select example">
                              <option value="Vendre">Vendre</option>
                              <option value="Location">Location</option>
                            </select>
                          </div> -->
                          <button type="submit" name="submit" id="submitBtn">Submit</button>
                        </form>

                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </section>
          </div>
        </div>
      </div>

    </section>

    <?php
            $msg = "";
            // session_start();
            if (isset($_POST['submit'])) {
            $con = mysqli_connect('localhost', 'Root', '', 'bibliothèque');
            if ($con) {
                // $id = $_POST['id'];
                $idClient  = $_SESSION['ID_ouvrage'];
                $titre = $_POST['titre'];
                $nom_auteur = $_POST['nom_auteur'];
                $type = $_POST['type'];
                $etat = $_POST['etat'];
                $nombre_page = $_POST['nombre_page'];
                $date_dédition = $_POST['date_dédition'];

                $con = mysqli_connect('localhost', 'Root', '', 'bibliothèque');
                if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
                }
            
                $sql = "INSERT INTO Ouvrage (ID_ouvrage,titre, nom_auteur, type, etat,nombre_page, date_dédition) VALUES ('$idClient','$titre','$nom_auteur','$type','$etat','$nombre_page','$date_dédition')";
            
                if ($con->query($sql) === TRUE) {
                $id_ouvrage = $con->insert_id;
            
                // $image = $_FILES['image']['name'];
                // $tmp_name = $_FILES['image']['tmp_name'];
                // $folder = "assets/img/" . $image;
                // $upload_success = move_uploaded_file($tmp_name, $folder);
                // $picturess = "INSERT INTO images(id_annonce,image_path) VALUES ('$id_annonce', '$folder')";
            
                
            
            
                if ($con->query($picturess) !== TRUE) {
                    echo "Error: " . $conn->error;
            
            
                    die("Error inserting image data.");
                }
            
                header("location:gerant.php");
                } else {
                die("Error inserting announcement data.");
                }
            
                $conn->close();
            }
                
            }
            ?>


    </body>
</html>