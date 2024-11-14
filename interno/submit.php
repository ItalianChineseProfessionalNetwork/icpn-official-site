<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ICPN Networking Dinner 2021</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <?php include '../news/partials/head-style.php'; ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include '../news/partials/header.php'; ?>

    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Modulo Interno</h2>

                    <ol>
                        <li><a href="../index.php">Home</a></li>
                        <li>Modulo Interno</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Section ======= -->
        <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 entries">
                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="img/about.png" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">Modulo Interno - Descrizione Profilo Team ICPN</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="../team.php">ICPN</a></li>
                                </ul>
                            </div>

                            <?php 
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $description = $_POST['description'];

                                $myfile = fopen("iscritti.csv", "a+") or die("Unable to open file!");
                                fwrite($myfile, "\n".$name.";");
                                fwrite($myfile, $email.";");
                                fwrite($myfile, $description.";");
                                fclose($myfile);
                                echo "<h4>Invio completato</h4>";
                            ?>

                        </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->

                </div><!-- End row -->

            </div><!-- End container -->

        </section><!-- End Blog Section -->
        
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include '../news/partials/footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <?php include '../news/partials/foot-script.php'; ?>

</body>

</html>