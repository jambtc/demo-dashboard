<?php
if ($_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

$title = 'FIDELITY Applications';


?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="assets/fonts/fontawesome/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/theme.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <!-- <img src="assets/img/logo.jpg" alt="" class="logo img-fluid"> -->
                <?= $title ?>
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-3 rounded" href="#portfolio">Applicazioni</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-3 rounded" href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container mt-2">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Applicazioni</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <?php
                require_once('src/applications.php');

                $source = configFile('applications');
                $applications = $source['source'];
                // echo "<pre>".print_r($applications,true)."</pre>";exit;

                foreach ($applications as $id => $application) {
                ?>
                    <!-- Portfolio Item <?= ($id + 1) ?>-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card card-image border-0 shadow px-3 py-2">
                            <div class="card-img-icon text-center" style="max-height: 150px;">
                                <img class="card-img-top p-3 img-responsive" style="width: 150px; height: 150px;" src="<?= $application['images'] ?>" alt=""><i></i>
                            </div>
                            <div class="card-body p-0">
                                <h4 class="card-title" title="<?= $application['title'] ?>"><?= $application['title'] ?></h4>
                                <p><?= $application['description'] ?></p>
                            </div>
                            <div class="card-footer bg-transparent text-center p-0">
                                <a href="<?= $application['url'] ?>" target="_blank" class="mt-2 btn btn-primary text-white external-link">Accedi <i class="fa-solid fa-arrow-up-right-from-square"></i><span class="sr-only"> a <?= $application['title'] ?>: apre una nuova finestra</span></a>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>




            </div>
        </div>
    </section>


    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col">
                    <p class="lead text-center">We think big, take smart risks, and do things that have never been done before.</p>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="team-round">
                        <div class="profile">
                            <div class="img">
                                <img src="assets/img/team/2.png" alt="">
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/sergio-casizzone-3328b1214/"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="lead team-name text-white">Sergio Casizzone</h3>
                        <span class="text-white">ICT & Senior Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Contatti</h4>
                    <p class="lead mb-0">

                        <br />
                        <i class="fas fa-phone"></i><span> +39 081 1946 3570</span>
                        <br />
                        <i class="fas fa-envelope"></i><span> <a href="mailto:info@txlab.it">info@txlab.it</a></span>
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Sul web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/sergio-casizzone-3328b1214/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; 2023</small></div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="js/bootstrap@5.1.3/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    
</body>

</html>