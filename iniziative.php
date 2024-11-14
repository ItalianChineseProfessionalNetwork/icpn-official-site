<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Iniziative - ICPN</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <?php include 'partials/head-style.php'; ?>
</head>

<body>
    <!-- ======= Header Navbar ======= -->
    <?php include 'partials/header.php'; ?>

    <main id="main">

        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Iniziative</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Iniziative</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                    
                        <div class="col-lg-12 filter-card ">
                            <div class="col-lg-12">
                                <h4 class="text-center">Progetto Donazioni</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 mx-auto">
                                <div class="portfolio-item">
                                    <img src="assets/img/initiatives/donation.jpeg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h3><a href="assets/img/initiatives/donation.jpeg" data-gall="portfolioGallery" class="venobox"></a></h3>
                                        <div>
                                            <a href="assets/img/initiatives/donation.jpeg" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i></a>
                                            <a href="initiatives/progettodonazioni.php" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'partials/footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <?php include 'partials/foot-script.php'; ?>

</body>

</html>