<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- header section starts -->

    <section class="header">
        <a href="index.php" class="logo"> <img src="https://g2r-formation.fr/wp-content/uploads/2018/04/logoG2R-2.png"
                width="338" height="108" alt="G2R Formation" id="logo" data-height-percentage="60"
                data-actual-width="338" data-actual-height="108"> G2R FORMATION</a>

        <nav class="navbar">
            <a href="index.php">Accueil</a>
            <a href="about.php">A Propos de Nous</a>
            <a href="formation.php">Formations</a>
            <a href="register.php">S'Enregistrer</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>
    <!-- header section ends -->

    <section class="home">

        <div class="home-slider">

            <div class="w">

                <div class="slide" style="background:url(images/acccueil-bg.jpg) no-repeat">

                    <div class="content">
                        <span>explorer, visiter, naviguer</span>
                        <h3>Voyager à travers G2R FORMATION</h3>
                        <a href="formation.php" class="btn">Pour plus d'Amples Infos</a>
                    </div>
                </div>

            </div>


        </div>

    </section>

    <!-- home section starts -->


    <!-- home section ends -->




    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>Accueil</h3>
            <p>G2R-FORMATION: Est une structure Technologique Spécialisée dans la Formation pour Adulte</p>
            <a href="about.php" class="btn">En savoir davantage</a>

        </div>

    </section>

    <!-- home about section ends -->



    <!-- home formationss section starts -->

    <section class="home-formations">
        <h1 class="heading-title">Nos Formations</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/formation-bg.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Administrateur d'Insfrastructure Sècurisé</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellendus amet quasi
                        adipisci? Quae, voluptatibus deleniti sunt aperiam numquam harum blanditiis ullam cupiditate
                        odio eaque officia facilis nam aspernatur asperiores!</p>
                </div>
                <a href="register.php" class="btn">Enregistrez-vous</a>

                <div class="box">
                    <div class="image">
                        <img src="images/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Concepteur Développeur d'Applications</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellendus amet quasi
                            adipisci? Quae, voluptatibus deleniti sunt aperiam numquam harum blanditiis ullam cupiditate
                            odio eaque officia facilis nam aspernatur asperiores!</p>
                    </div>
                    <a href="login.php" class="btn">Inscrivez-vous</a>


                    <div class="box">
                        <div class="image">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Assitant commercial</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellendus amet
                                quasi adipisci? Quae, voluptatibus deleniti sunt aperiam numquam harum blanditiis ullam
                                cupiditate odio eaque officia facilis nam aspernatur asperiores!</p>
                        </div>
                        <a href="logout.php" class="btn">Connectez-vous</a>

                    </div>

                </div>

    </section>
    <!-- home formations section ends -->






    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Liens Rapides</h3>
                <a href="index.php"> <i class="fas fa-angle-right"></i> Accueil</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> A Propos de Nous</a>
                <a href="formation.php"> <i class="fas fa-angle-right"></i> Formations</a>
                <a href="contact.php"> <i class="fas fa-angle-right"></i> Nous contacter</a>
            </div>


            <div class="box">
                <h3>Informations de Contact</h3>
                <a href="#"> <i class="fas fa-phone"></i>+331 44 64 85 85 </a>
                <a href="#"> <i class="fas fa-envelope"></i>formation@g2r-formation.fr</a>
                <a href="#"> <i class="fas fa-map"></i>102 Avenue Philippe Auguste 75011 Paris</a>
            </div>

            <div class="box">
                <h3>Nous Suivre</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
            </div>

        </div>

        <div class="credit">
            &copy; copyright @ 2023 par <span>G2R</span> .Tous les droits sont rèservés!
        </div>

    </section>
    <!-- footer section ends -->


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->

    <script src="script.js"></script>
</body>

</html>